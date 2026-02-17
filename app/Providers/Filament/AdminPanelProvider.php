<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\CustomLogin;
use App\Filament\Pages\CustomDashboard;
use App\Filament\Pages\Auth\CustomRegister;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Enums\ThemeMode;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(CustomLogin::class)
            ->colors([
                'primary' => Color::hex('#13ec25'),
            ])
            ->defaultThemeMode(ThemeMode::Dark)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                CustomDashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->registration(CustomRegister::class)
            ->renderHook(
                'panels::head.start',
                fn(): string => <<<'HTML'
                    <link href="https://fonts.googleapis.com" rel="preconnect" />
                    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
                    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
                    <script>
                        // Force dark mode BEFORE paint to prevent flash
                        (function(){
                            var stored = localStorage.getItem('theme');
                            if (stored !== 'light') {
                                document.documentElement.classList.add('dark');
                                localStorage.setItem('theme', 'dark');
                            }
                        })();
                    </script>
                HTML
            )
            ->renderHook(
                'panels::body.start',
                fn(): string => \Illuminate\Support\Facades\Blade::render('@include("filament.hooks.custom-sidebar-overlay")')
            )
            ->renderHook(
                'panels::body.start',
                fn(): string => \Illuminate\Support\Facades\Blade::render('@include("filament.hooks.custom-header-overlay")')
            )
            ->renderHook(
                'panels::head.end',
                fn(): string => <<<'HTML'
                    <style>
                        /* Hide Default Filament Sidebar and Topbar */
                        .fi-sidebar { display: none !important; }
                        .fi-topbar { display: none !important; }
                        
                        /* Adjust Main Content Area to accommodate custom fixed sidebar/header */
                        .fi-main-ctn {
                            margin-left: 18rem !important;
                            padding-top: 5rem !important;
                        }
                        
                        /* Force dark mode backgrounds throughout Filament */
                        .dark body,
                        .dark .fi-body {
                            background-color: #0f1f14 !important;
                        }
                        .dark .fi-main-ctn,
                        .dark .fi-page,
                        .dark .fi-main {
                            background-color: #0f1f14 !important;
                        }
                        .dark .fi-section,
                        .dark .fi-ta-ctn {
                            background-color: #1a2e20 !important;
                            border-color: rgba(255,255,255,0.1) !important;
                        }
                        .dark .fi-ta-header-cell,
                        .dark .fi-ta-cell {
                            color: rgba(255,255,255,0.8) !important;
                        }
                        .dark .fi-header-heading {
                            color: #fff !important;
                        }
                        .dark .fi-breadcrumbs-item span,
                        .dark .fi-breadcrumbs-item a {
                            color: rgba(255,255,255,0.5) !important;
                        }
                        /* Form fields dark styling */
                        .dark .fi-fo-field-wrp label {
                            color: rgba(255,255,255,0.8) !important;
                        }
                        .dark .fi-input {
                            background-color: #1a2e20 !important;
                            border-color: rgba(255,255,255,0.15) !important;
                            color: #fff !important;
                        }
                        .dark .fi-select-trigger {
                            background-color: #1a2e20 !important;
                            border-color: rgba(255,255,255,0.15) !important;
                            color: #fff !important;
                        }
                        
                        /* Mobile Responsive Adjustment */
                        @media (max-width: 768px) {
                            .fi-main-ctn {
                                margin-left: 0 !important;
                                padding-top: 4rem !important;
                            }
                        }

                        /* Custom scrollbar */
                        .sidebar-scroll::-webkit-scrollbar { width: 5px; }
                        .sidebar-scroll::-webkit-scrollbar-track { background: transparent; }
                        .sidebar-scroll::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }

                        /* Hide "Crear y crear otro" button */
                        .fi-ac-btn-action[wire\:click*="createAnother"],
                        button[wire\:click*="createAnother"] {
                            display: none !important;
                        }
                    </style>
                HTML
            );
    }
}
