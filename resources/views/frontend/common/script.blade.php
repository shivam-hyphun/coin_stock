<script>
    let elements = document.querySelectorAll("[data-menu]");
    elements.forEach(main => {
        // Adding mouseover event listener to open the menu
        main.addEventListener("mouseover", function() {
            openMenu(main);
        });

        // Adding mouseout event listener to the main menu
        main.addEventListener("mouseout", function(event) {
            // Check if the mouse is still within the main menu item or its submenu
            if (!isMouseInside(event.relatedTarget, main)) {
                closeMenu(main);
            }
        });

        // Adding mouseover event listener to the submenu items
        main.querySelectorAll("[data-submenu]").forEach(submenuItem => {
            submenuItem.addEventListener("mouseover", function() {
                openSubmenu(submenuItem);
            });

            submenuItem.addEventListener("mouseout", function(event) {
                // Check if the mouse is still within the submenu item or its second-level submenu
                if (!isMouseInside(event.relatedTarget, submenuItem)) {
                    closeSubmenu(submenuItem);
                }
            });
        });
    });

    function openMenu(mainElement) {
        let child = mainElement.parentElement.querySelector("ul");
        if (child) {
            // Make menu visible
            child.classList.remove("opacity-0", "invisible");
            child.classList.add("opacity-100", "visible");
        }
    }

    function closeMenu(mainElement) {
        let child = mainElement.parentElement.querySelector("ul");
        if (child) {
            // Hide menu
            child.classList.remove("opacity-100", "visible");
            child.classList.add("opacity-0", "invisible");
        }
    }

    function openSubmenu(submenuItem) {
        let secondLevelChild = submenuItem.querySelector("ul");
        if (secondLevelChild) {
            // Make submenu visible
            secondLevelChild.classList.remove("opacity-0", "invisible");
            secondLevelChild.classList.add("opacity-100", "visible");
        }
    }

    function closeSubmenu(submenuItem) {
        let secondLevelChild = submenuItem.querySelector("ul");
        if (secondLevelChild) {
            // Hide submenu
            secondLevelChild.classList.remove("opacity-100", "visible");
            secondLevelChild.classList.add("opacity-0", "invisible");
        }
    }

    function isMouseInside(target, mainElement) {
        if (!target) return false;
        // Check if the target is the main element, its submenu, its second-level submenu, or a descendant of them
        return (
            target === mainElement ||
            mainElement.contains(target) ||
            target.closest("[data-menu]") === mainElement ||
            target.closest("[data-submenu]") ||
            target.closest("[data-submenu] ul") ||
            target.closest("[data-submenu] ul li")
        );
    }
</script>

<script>
    function activeTab(element) {
        let siblings = element.parentNode.querySelectorAll("li");
        for (let item of siblings) {
            item.classList.add("text-gray-600");
            item.classList.remove("text-gray-200");
            item.classList.remove("bg-gray-700");

        }
        element.classList.remove("text-gray-600");
        element.classList.add("text-gray-200");
        element.classList.add("bg-gray-700");

    }
</script>

<script>
    function dropdownFunction(element) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
        list.classList.add("target");
        for (i = 0; i < dropdowns.length; i++) {
            if (!dropdowns[i].classList.contains("target")) {
                dropdowns[i].classList.add("hidden");
            }
        }
        list.classList.toggle("hidden");
    }
</script>

{{--  ? mobile menu open close  --}}

<script>
    // ------------------------------------------------------
    let sideBar = document.getElementById("mobile-nav");
    let menu = document.getElementById("menu");
    let cross = document.getElementById("cross");
    const sidebarHandler = (check) => {
        if (check) {
            sideBar.classList.remove("hidden");
            sideBar.style.transform = "translateX(0px)";
            menu.classList.add("hidden");

        } else {
            sideBar.classList.add("hidden");
            sideBar.style.transform = "translateX(-100%)";
            menu.classList.remove("hidden");

        }
    };
</script>

<script>
    document.querySelectorAll('[data-menu]').forEach(menu => {
        menu.addEventListener('mouseover', () => {
            const submenu = menu.querySelector('[data-submenu]');
            if (submenu) {
                submenu.classList.remove('hidden');
            }
        });

        menu.addEventListener('mouseout', () => {
            const submenu = menu.querySelector('[data-submenu]');
            if (submenu) {
                submenu.classList.add('hidden');
            }
        });
    });
</script>
