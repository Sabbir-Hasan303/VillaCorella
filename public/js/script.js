
// Visible navbar on scrolling
let prevScrollPos = window.pageYOffset;

window.onscroll = function () {
    const currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        document.getElementById("navbar").style.transform = "translateY(0)";
    } else {
        document.getElementById("navbar").style.transform = "translateY(-100%)";
    }

    prevScrollPos = currentScrollPos;
}
// Dropdown Part
function Menu(e) {
    let list = document.getElementById('dropdownMenu');
    e.name === 'menu' ? (e.name = "close", list.classList.remove('hidden'), document.body.style.overflow = 'hidden') : (e.name = "menu", list.classList.add('hidden'), document.body.style.overflow = 'auto')
}

// For Navbar
var acc2 = document.getElementsByClassName("navLanguage");
var i;

for (i = 0; i < acc2.length; i++) {
    acc2[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel2 = this.nextElementSibling;
        panel2.classList.toggle("hidden");
    });
}

// ReadMore Button And Less
var readM = document.getElementById("readm");
var readL = document.getElementById("readl");
var readMP = document.getElementById("readmp");
var readLP = document.getElementById("readlp");

readM.onclick = function () {
    this.style.display = "none";
    readLP.style.display = "block";
    readMP.style.display = "none";
    readL.style.display = "flex";
}

readL.onclick = function () {
    this.style.display = "none";
    readMP.style.display = "block";
    readLP.style.display = "none";
    readM.style.display = "flex";
}

// For Book and Description
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}


// Settings Part

var settingMb = document.getElementById("setting-mb");
var nearbyMb = document.getElementById("nearby-mb");
var settingInfoMb = document.getElementById("setting-info-mb");
var nearbyInfoMb = document.getElementById("nearby-info-mb");

settingMb.onclick = function () {
    this.className =
        "pb-2 mr-9 text-base font-bold text-gray-700 border-b  border-gray-700 hover:cursor-pointer";
    nearbyMb.className =
        "pb-2 mr-9 text-base font-bold  text-gray-500 hover:cursor-pointer";
    nearbyInfoMb.style.display = "none";
    settingInfoMb.style.display = "flex";
};
nearbyMb.onclick = function () {
    this.className =
        "pb-2 mr-9 text-base font-bold text-gray-700 border-b  border-gray-700 hover:cursor-pointer";
    settingMb.className =
        "pb-2 mr-9 text-base font-bold  text-gray-500 hover:cursor-pointer";
    nearbyInfoMb.style.display = "block";
    settingInfoMb.style.display = "none";
};


// Slider Js Part
var glide01 = new Glide('.glide-01', {
    type: 'slider',
    focusAt: 'center',
    perView: 1,
    autoplay: false,
    animationDuration: 700,
    gap: 0,
    classes: {
        activeNav: '[&>*]:bg-slate-700',
    },

});

glide01.mount();


// Mobile View Setting and Nearby ends here
var franceLarge = document.getElementById("frace-lrg");
var europeLarge = document.getElementById("europe-xlrg");
var otherCountries = document.getElementById("other-xlrg");
var franceLargediv = document.getElementById("frace-lrg-div");
var europeLargediv = document.getElementById("europe-xlrg-div");
var otherCountriesdiv = document.getElementById("other-xlrg-div");

franceLarge.onclick = function () {
    franceLargediv.classList.add("flex");
    franceLargediv.classList.remove("hidden");
    europeLargediv.classList.add("hidden");
    otherCountriesdiv.classList.add("hidden");
    this.className = "text-white hover:cursor-pointer bg-[#1c5050] mr-4 px-4 py-1 rounded-full text-xl";
    europeLarge.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"
    otherCountries.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"

}
europeLarge.onclick = function () {
    europeLargediv.classList.add("flex");
    europeLargediv.classList.remove("hidden");
    franceLargediv.classList.add("hidden");
    otherCountriesdiv.classList.add("hidden");
    this.className = "text-white hover:cursor-pointer bg-[#1c5050] mr-4 px-4 py-1 rounded-full text-xl";
    franceLarge.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"
    otherCountries.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"

}
otherCountries.onclick = function () {
    otherCountriesdiv.classList.add("flex");
    otherCountriesdiv.classList.remove("hidden");
    europeLargediv.classList.add("hidden");
    franceLargediv.classList.add("hidden");
    this.className = "text-white hover:cursor-pointer bg-[#1c5050] mr-4 px-4 py-1 rounded-full text-xl";
    europeLarge.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"
    franceLarge.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"

}
