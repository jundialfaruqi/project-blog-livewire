<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} - JWSM TV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-base-200">
    <div class="drawer lg:drawer-open">
        <input id="drawer-toggle" type="checkbox" class="drawer-toggle" />

        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Page content -->
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            @include('components.navbar')

            <!-- Main content -->
            <main class="flex-1 p-4 md:pt-0 md:ps-4 md:pe-4 md:pb-4 pb-20 lg:pb-4">
                <fieldset class="fieldset bg-base-200 border-base-300 rounded-box border pt-2 pb-4 ps-4 pe-4">
                    <legend class="fieldset-legend gap-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                        </svg>
                        <span class="text-lg font-semibold">{{ $title ?? '' }}</span>
                    </legend>

                    {{ $slot }}

                </fieldset>
            </main>
        </div>

        {{-- Dock --}}
        @include('components.dock')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.getElementById('sidebar');
            const toggleIcon = sidebarToggle ? sidebarToggle.querySelector('svg path') : null;
            const toggleText = sidebarToggle ? sidebarToggle.querySelector('.menu-item-text') : null;

            if (sidebarToggle && sidebar && toggleIcon) {
                sidebarToggle.addEventListener('click', function() {
                    // Toggle between collapsed and expanded width
                    if (sidebar.classList.contains('w-64') ||
                        sidebar.classList.contains('sm:w-72') ||
                        sidebar.classList.contains('md:w-80')) {

                        // Collapse sidebar
                        sidebar.classList.remove('w-64', 'sm:w-72', 'md:w-80');
                        sidebar.classList.add('w-20');

                        // Hide text elements (but not in dropdown menus)
                        document.querySelectorAll('.menu-item-text, .menu-title, .sidebar-title').forEach(
                            el => {
                                // Don't hide text inside details/dropdown menus
                                if (!el.closest('details')) {
                                    el.classList.add('hidden');
                                }
                            });

                        // Hide dropdown menus completely when sidebar is collapsed
                        document.querySelectorAll('.menu details').forEach(details => {
                            details.classList.add('hidden');
                        });

                        // Show collapsed title (JT)
                        document.querySelector('.sidebar-collapsed-title').classList.remove('hidden');

                        // Enlarge icons
                        document.querySelectorAll('.menu svg').forEach(icon => {
                            icon.classList.add('w-7', 'h-7');
                        });

                        // Center menu items and add vertical padding
                        document.querySelectorAll('.menu a, .menu button').forEach(item => {
                            item.classList.add('justify-center', 'py-3');
                        });

                        // Center user avatar in collapsed mode and remove border
                        const userInfoContainer = document.querySelector('.user-info-container');
                        if (userInfoContainer) {
                            userInfoContainer.classList.add('flex', 'justify-center');
                            userInfoContainer.classList.remove('border', 'rounded-lg');
                            userInfoContainer.querySelector('.flex.items-center.justify-between').classList
                                .add('justify-center');
                            userInfoContainer.querySelector('.flex.items-center.justify-between').classList
                                .remove('justify-between');

                            // Hide dropdown menu completely in sidebar when collapsed
                            const dropdownButton = userInfoContainer.querySelector('button');
                            if (dropdownButton) {
                                dropdownButton.classList.add('hidden');
                            }

                            // Hide dropdown content
                            const dropdownContent = userInfoContainer.querySelector('.dropdown-content');
                            if (dropdownContent) {
                                dropdownContent.classList.add('hidden');
                            }

                            // Disable pointer events on the entire user info container
                            userInfoContainer.classList.add('pointer-events-none');

                            // Remove cursor pointer style from all clickable elements
                            const clickableElements = userInfoContainer.querySelectorAll('.cursor-pointer');
                            clickableElements.forEach(el => {
                                el.classList.remove('cursor-pointer');
                            });
                        }

                        // Change toggle icon to expand icon and center it
                        toggleIcon.setAttribute('d',
                            'M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9'
                        );

                        // Ensure SVG icon is centered within its container
                        const svgElement = toggleIcon.closest('svg');
                        if (svgElement) {
                            svgElement.setAttribute('class', 'h-5 w-5 mx-auto');
                        }

                        // Hide toggle text but keep button visible
                        if (toggleText) {
                            toggleText.classList.add('hidden');
                        }

                        // Center the collapsed title (JT)
                        const collapsedTitle = document.querySelector('.sidebar-collapsed-title');
                        if (collapsedTitle) {
                            collapsedTitle.classList.add('block', 'text-center', 'w-full');
                            collapsedTitle.parentElement.classList.add('justify-center');
                            collapsedTitle.parentElement.classList.remove('justify-start');
                        }

                        // Center the toggle button icon
                        sidebarToggle.classList.add('justify-center');
                        sidebarToggle.classList.remove('px-4');
                        sidebarToggle.classList.add('px-0');
                    } else {
                        // Expand sidebar
                        sidebar.classList.remove('w-20');
                        sidebar.classList.add('w-64', 'sm:w-72', 'md:w-80');

                        // Show text elements
                        document.querySelectorAll('.menu-item-text, .menu-title, .sidebar-title').forEach(
                            el => {
                                el.classList.remove('hidden');
                            });

                        // Show dropdown menus when sidebar is expanded
                        document.querySelectorAll('.menu details').forEach(details => {
                            details.classList.remove('hidden');
                        });

                        // Hide collapsed title (JT)
                        document.querySelector('.sidebar-collapsed-title').classList.add('hidden');

                        // Restore icon size
                        document.querySelectorAll('.menu svg').forEach(icon => {
                            icon.classList.remove('w-7', 'h-7');
                        });

                        // Restore user info container in expanded mode
                        const userInfoContainer = document.querySelector('.user-info-container');
                        if (userInfoContainer) {
                            userInfoContainer.classList.remove('flex', 'justify-center');
                            userInfoContainer.classList.add('border', 'rounded-lg');
                            userInfoContainer.querySelector('.flex.items-center.justify-center').classList
                                .add('justify-between');
                            userInfoContainer.querySelector('.flex.items-center.justify-center').classList
                                .remove('justify-center');

                            // Show dropdown button again
                            const dropdownButton = userInfoContainer.querySelector('button');
                            if (dropdownButton) {
                                dropdownButton.classList.remove('hidden');
                            }

                            // Show dropdown content
                            const dropdownContent = userInfoContainer.querySelector('.dropdown-content');
                            if (dropdownContent) {
                                dropdownContent.classList.remove('hidden');
                            }

                            // Re-enable pointer events on the user info container
                            userInfoContainer.classList.remove('pointer-events-none');

                            // Restore cursor pointer style to clickable elements
                            const clickableDiv = userInfoContainer.querySelector('div[tabindex="0"]');
                            if (clickableDiv) {
                                clickableDiv.classList.add('cursor-pointer');
                            }

                            // Restore cursor pointer to button
                            if (dropdownButton) {
                                dropdownButton.classList.add('cursor-pointer');
                            }
                        }

                        // Restore menu item alignment and remove vertical padding
                        document.querySelectorAll('.menu a, .menu button').forEach(item => {
                            item.classList.remove('justify-center', 'py-3');
                        });

                        // Change toggle icon back to collapse icon
                        toggleIcon.setAttribute('d',
                            'M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15'
                        );

                        // Reset SVG icon styling
                        const svgElement = toggleIcon.closest('svg');
                        if (svgElement) {
                            svgElement.setAttribute('class', 'h-5 w-5 mr-2');
                        }

                        // Show toggle text
                        if (toggleText) {
                            toggleText.classList.remove('hidden');
                        }

                        // Restore sidebar title alignment
                        const sidebarTitle = document.querySelector('.sidebar-title');
                        const collapsedTitle = document.querySelector('.sidebar-collapsed-title');
                        if (sidebarTitle && collapsedTitle) {
                            // Hide collapsed title
                            collapsedTitle.classList.add('hidden');
                            collapsedTitle.classList.remove('block');

                            // Show main title and restore parent alignment
                            sidebarTitle.classList.remove('hidden');
                            sidebarTitle.parentElement.classList.remove('justify-center');
                            sidebarTitle.parentElement.classList.add('justify-start');
                        }

                        // Restore toggle button padding
                        sidebarToggle.classList.remove('justify-center');
                        sidebarToggle.classList.add('px-4');
                        sidebarToggle.classList.remove('px-0');
                    }
                });
            }
        });

        // Dark Mode Toggle Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const themeController = document.querySelector('.theme-controller');
            const htmlElement = document.documentElement;

            // Check for saved theme preference or default to 'light'
            const savedTheme = localStorage.getItem('theme') || 'light';

            // Apply saved theme
            htmlElement.setAttribute('data-theme', savedTheme);

            // Set checkbox state based on saved theme
            if (themeController) {
                themeController.checked = savedTheme === 'dark';
            }

            // Listen for theme toggle
            if (themeController) {
                themeController.addEventListener('change', function() {
                    const newTheme = this.checked ? 'dark' : 'light';

                    // Apply theme
                    htmlElement.setAttribute('data-theme', newTheme);

                    // Save preference
                    localStorage.setItem('theme', newTheme);

                    // Optional: Add smooth transition
                    htmlElement.style.transition = 'background-color 0.3s ease, color 0.3s ease';
                    setTimeout(() => {
                        htmlElement.style.transition = '';
                    }, 300);
                });
            }
        });
    </script>
</body>

</html>
