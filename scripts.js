// Header
document.addEventListener("DOMContentLoaded", function () {
  const body = document.body;
  const menuToggleLarge = document.getElementById("menuToggleLarge");
  const menuToggleSmall = document.getElementById("menuToggleSmall");
  const menuOverlay = document.getElementById("menuOverlay");
  const menuLinks = document.querySelectorAll("#menuOverlay a");

  function toggleMenu(menuButton) {
    const isOpen = menuOverlay.classList.toggle("hidden");
    menuOverlay.classList.toggle("flex");
    body.classList.toggle("overflow-hidden", !isOpen);
    menuButton.style.zIndex = isOpen ? "20" : "60";

    const lines = menuButton.querySelectorAll("span");
    const isSmall = menuButton === menuToggleSmall;
    updateMenuIcon(lines, isOpen, isSmall);
  }

  function updateMenuIcon(lines, isOpen, isSmall) {
    if (!isOpen) {
      lines[0].classList.add("rotate-45");
      lines[0].classList.replace("bg-zinc-900", "bg-neutral-50");
      lines[1].classList.add("-rotate-45");
      lines[1].classList.replace("bg-darkgreen", "bg-neutral-50");

      if (isSmall) {
        lines[0].classList.add("translate-y-1");
        lines[1].classList.add("-translate-y-1");
        lines[1].style.width = "2rem";
      } else {
        lines[0].classList.add("translate-y-1.5");
        lines[1].classList.add("-translate-y-1.5");
        lines[1].style.width = "2.5rem";
      }
    } else {
      lines[0].classList.remove("rotate-45");
      lines[0].classList.replace("bg-neutral-50", "bg-zinc-900");
      lines[1].classList.remove("-rotate-45");
      lines[1].classList.replace("bg-neutral-50", "bg-darkgreen");
      lines[1].style.width = "";

      if (isSmall) {
        lines[0].classList.remove("translate-y-1");
        lines[1].classList.remove("-translate-y-1");
      } else {
        lines[0].classList.remove("translate-y-1.5");
        lines[1].classList.remove("-translate-y-1.5");
      }
    }
  }

  menuLinks.forEach((link) => {
    link.addEventListener("mouseenter", () => {
      menuLinks.forEach(
        (lnk) => lnk !== link && lnk.classList.add("opacity-40")
      );
    });

    link.addEventListener("mouseleave", () => {
      menuLinks.forEach((lnk) => lnk.classList.remove("opacity-40"));
    });
  });

  menuToggleLarge.addEventListener("click", () => toggleMenu(menuToggleLarge));
  menuToggleSmall.addEventListener("click", () => toggleMenu(menuToggleSmall));
});

// Footer
document.addEventListener("DOMContentLoaded", function () {
  var scrollToTopButton = document.getElementById("scroll-to-top-btn");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
      scrollToTopButton.classList.remove("hidden");
    } else {
      scrollToTopButton.classList.add("hidden");
    }
  });

  scrollToTopButton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

const footerLinks = document.querySelectorAll("#footerLinks a");

footerLinks.forEach((link) => {
  link.addEventListener("mouseenter", () => {
    footerLinks.forEach(
      (lnk) => lnk !== link && lnk.classList.add("opacity-40")
    );
  });

  link.addEventListener("mouseleave", () => {
    footerLinks.forEach((lnk) => lnk.classList.remove("opacity-40"));
  });
});

// FAQ Page
document.addEventListener("DOMContentLoaded", function () {
  var faqSection = document.querySelector("main section");

  faqSection.addEventListener("click", function (event) {
    var button = event.target.closest("button");
    if (!button) return;

    var isExpanded = button.getAttribute("aria-expanded") === "true";
    button.setAttribute("aria-expanded", !isExpanded);

    var icons = button.querySelectorAll("svg");
    icons.forEach((icon) => {
      icon.classList.toggle("hidden");
    });

    var answer = button.parentNode.nextElementSibling;
    if (
      answer.style.display === "none" ||
      answer.classList.contains("hidden")
    ) {
      answer.style.display = "block";
      answer.classList.remove("hidden");
    } else {
      answer.style.display = "none";
      answer.classList.add("hidden");
    }
  });
});

// Home Page
document.addEventListener("DOMContentLoaded", function () {
  const day1Tab = document.getElementById("tabDay1");
  const day2Tab = document.getElementById("tabDay2");
  const day1Content = document.getElementById("day1Content");
  const day2Content = document.getElementById("day2Content");

  function selectDay1() {
    if (window.innerWidth < 1024) {
      day1Content.classList.remove("hidden");
      day2Content.classList.add("hidden");
      day1Tab.classList.add("bg-darkgreen", "text-white");
      day1Tab.classList.remove("bg-white", "text-zinc-900");
      day2Tab.classList.add("bg-white", "text-zinc-900");
      day2Tab.classList.remove("bg-darkgreen", "text-white");
    }
  }

  function selectDay2() {
    if (window.innerWidth < 1024) {
      day2Content.classList.remove("hidden");
      day1Content.classList.add("hidden");
      day2Tab.classList.add("bg-darkgreen", "text-white");
      day2Tab.classList.remove("bg-white", "text-zinc-900");
      day1Tab.classList.add("bg-white", "text-zinc-900");
      day1Tab.classList.remove("bg-darkgreen", "text-white");
    }
  }

  day1Tab.addEventListener("click", selectDay1);
  day2Tab.addEventListener("click", selectDay2);

  window.addEventListener("resize", function () {
    if (window.innerWidth >= 1024) {
      day1Content.classList.remove("hidden");
      day2Content.classList.remove("hidden");
      day1Tab.classList.remove("bg-darkgreen", "text-white");
      day2Tab.classList.remove("bg-darkgreen", "text-white");
      day1Tab.classList.add("bg-white", "text-zinc-900");
      day2Tab.classList.add("bg-white", "text-zinc-900");
    } else {
      if (day1Content.classList.contains("hidden")) {
        selectDay2();
      } else {
        selectDay1();
      }
    }
  });

  if (window.innerWidth < 1024) {
    selectDay1();
  } else {
    day1Content.classList.remove("hidden");
    day2Content.classList.remove("hidden");
  }
});

const sponsorHover = document.querySelectorAll("#sponsorHover a");

sponsorHover.forEach((hover) => {
  hover.addEventListener("mouseenter", () => {
    sponsorHover.forEach(
      (hvr) => hvr !== hover && hvr.classList.add("opacity-40")
    );
  });

  hover.addEventListener("mouseleave", () => {
    sponsorHover.forEach((hvr) => hvr.classList.remove("opacity-40"));
  });
});

// Speakers Page
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll("#yearTabs li");
  const yearGroups = document.querySelectorAll(".year-group");

  const defaultTab = tabs[0];
  const defaultYear = defaultTab.getAttribute("data-year");

  defaultTab.querySelector("a").classList.add("text-darkgreen");

  yearGroups.forEach((group) => {
    const year = group.getAttribute("data-year");
    if (year === defaultYear) {
      group.classList.remove("hidden");
      group.classList.add(
        "grid",
        "sm:grid-cols-1",
        "md:grid-cols-2",
        "lg:grid-cols-3",
        "gap-4"
      );
    } else {
      group.classList.add("hidden");
      group.classList.remove(
        "grid",
        "sm:grid-cols-1",
        "md:grid-cols-2",
        "lg:grid-cols-3",
        "gap-4"
      );
    }
  });

  tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      const year = this.getAttribute("data-year");

      tabs.forEach((t) => {
        t.querySelector("a").classList.remove("text-darkgreen");
        t.querySelector("a").classList.add("text-zinc-900");
      });
      this.querySelector("a").classList.add("text-darkgreen");
      this.querySelector("a").classList.remove("text-zinc-900");

      yearGroups.forEach((group) => {
        if (group.getAttribute("data-year") === year) {
          group.classList.remove("hidden");
          group.classList.add(
            "grid",
            "sm:grid-cols-1",
            "md:grid-cols-2",
            "lg:grid-cols-3",
            "gap-4"
          );
        } else {
          group.classList.add("hidden");
          group.classList.remove(
            "grid",
            "sm:grid-cols-1",
            "md:grid-cols-2",
            "lg:grid-cols-3",
            "gap-4"
          );
        }
      });

      tabs.forEach((t) => {
        if (t !== tab) {
          t.classList.add("opacity-40");
        }
      });
    });

    tab.addEventListener("mouseenter", function () {
      tabs.forEach((t) => {
        if (t !== tab) {
          t.classList.add("opacity-40");
        }
      });
    });

    tab.addEventListener("mouseleave", function () {
      tabs.forEach((t) => t.classList.remove("opacity-40"));
    });
  });
});
