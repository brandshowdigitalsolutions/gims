// Placements
document.addEventListener("DOMContentLoaded", () => {
  const companies = []; // Fill your company logo list here

  const marqueeContent = document.querySelector(".marquee-content");

  if (marqueeContent) {
    for (let i = 0; i < 2; i++) {
      companies.forEach((company) => {
        const logoContainer = document.createElement("div");
        logoContainer.className =
          "inline-block mx-4 bg-white p-1 rounded-md w-32 object-cover";
        logoContainer.innerHTML = `
            <img loading="lazy" src="${company.logo}" alt="${company.name}" onerror="this.onerror=null;this.src='images/fallback.jpg';" class="h-12 mx-auto">
          `;
        marqueeContent.appendChild(logoContainer);
      });
    }
  }

  const slider = document.getElementById("slider");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  let currentIndex = 0;
  const cardWidth = 100; // percentage

  function getVisibleCards() {
    return window.innerWidth >= 768 ? 2 : 1;
  }

  function getMaxIndex() {
    return (
      document.querySelectorAll("#slider > div").length - getVisibleCards()
    );
  }

  function updateSlider() {
    const visibleCards = getVisibleCards();
    const translateValue = -currentIndex * (cardWidth / visibleCards);
    slider.style.transform = `translateX(${translateValue}%)`;
  }

  prevBtn?.addEventListener("click", () => {
    currentIndex = Math.max(0, currentIndex - 1);
    updateSlider();
  });

  nextBtn?.addEventListener("click", () => {
    currentIndex = Math.min(getMaxIndex(), currentIndex + 1);
    updateSlider();
  });

  setInterval(() => {
    currentIndex = currentIndex >= getMaxIndex() ? 0 : currentIndex + 1;
    updateSlider();
  }, 5000);

  window.addEventListener("resize", () => {
    currentIndex = Math.min(currentIndex, getMaxIndex());
    updateSlider();
  });

  updateSlider(); // Initial setup

  // ---- Marquee Animation ----
  let marqueeInterval;

  function startMarquee() {
    clearInterval(marqueeInterval);
    marqueeInterval = setInterval(() => {
      const firstLogo = marqueeContent?.firstElementChild;
      if (!firstLogo) return;

      const width =
        firstLogo.offsetWidth +
        parseInt(getComputedStyle(firstLogo).marginLeft) +
        parseInt(getComputedStyle(firstLogo).marginRight);

      marqueeContent.style.transition = "transform 1s ease-in-out";
      marqueeContent.style.transform = `translateX(-${width}px)`;

      setTimeout(() => {
        marqueeContent.style.transition = "none";
        marqueeContent.style.transform = "translateX(0)";
        marqueeContent.appendChild(firstLogo);
      }, 1000);
    }, 3000);
  }

  if (marqueeContent) startMarquee();
});

let activeIndex = 0;

function handleClick(index) {
  if (activeIndex === index) return;

  activeIndex = index;

  document.querySelectorAll(".group").forEach((el, idx) => {
    const textEl = document.getElementById(`text-${idx}`);
    const slideEl = document.getElementById(`slide-${idx}`);

    if (idx === index) {
      slideEl.classList.add("w-[69%]");
      slideEl.classList.remove("w-[6%]");
      textEl.classList.add("opacity-100");
    } else {
      slideEl.classList.remove("w-[69%]");
      slideEl.classList.add("w-[6%]");
      textEl.classList.remove("opacity-100");
    }
  });
}

new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  loop: true,
});

// COURSES OFFERED
document.querySelectorAll(".course-btn").forEach((button) => {
  button.classList.add(
    "flex",
    "items-center",
    "justify-center",
    "gap-2",
    "px-6",
    "py-4",
    "bg-transparent",
    "text-gray-900",
    "rounded-full",
    "text-center",
    "border-2",
    "border-yellow-400",
    "min-w-[200px]",
    "shadow-lg",
    "font-bold"
  );
  button.addEventListener("click", (e) => showToast(e.target.dataset.course));
});

function showToast(course) {
  const toastContainer = document.getElementById("toast-container");
  let subjectsHtml = "";

  if (course === "Engineering") {
    subjectsHtml = `
                <li class="text-md">B.TECH</li>
                <li class="text-md">CSE, CS-CYBERSECURITY, CS-AI&ML, CS-D.S, CS- A.I, C.E, ECE, E.E, I.T, C.E</li>
                <li class="text-md">B.TECH LATERAL :</li>
                <li class="text-md">CSE, CS-CYBERSECURITY, CS-AI&DS, CS-IOT, CS -AI&ML, C.E, ECE, E.E, I.T, M.E.</li>
                <li class="text-md">M.TECH :</li>
                <li class="text-md">C.E, CSE, ECE, M.E, E.E</li>
            `;
  } else if (course === "Management") {
    subjectsHtml = `
                <li class="text-md">BBA</li>
                <li class="text-md">PGDM</li>
                <li class="text-md">MBA</li>
                <li class="text-md">MBA Integrated</li>
            `;
  } else if (course === "Commerce") {
    subjectsHtml = `
                <li class="text-md">B.COM</li>
                <li class="text-md">B.COM (Hons)</li>
            `;
  } else if (course === "Computer Applications") {
    subjectsHtml = `
                <li class="text-md">BCA</li>
                <li class="text-md">MCA</li>
                <li class="text-md">MCA (INTG)</li>
                <li class="text-md">BSC (C.S.)</li>
            `;
  } else if (course === "Nursing") {
    subjectsHtml = `
                <li class="text-md">B.SC(N)</li>
                <li class="text-md">GNM</li>
            `;
  } else if (course === "Pharmacy") {
    subjectsHtml = `
                <li class="text-md">B.PHARMA</li>
                <li class="text-md">D.PHARMA</li>
            `;
  } else if (course === "Law") {
    subjectsHtml = `
                <li class="text-md">LLB</li>
                <li class="text-md">BA LLB</li>
            `;
  }

  toastContainer.innerHTML = `
            <div id="toast" class="bg-white z-10 shadow-xl p-4 toast-enter border-l-[4px] border-yellow-400">
                <div class="flex justify-between items-center border-b pb-2">
                    <h4 class="font-bold text-lg text-yellow-400">${course}</h4>
                    <button onclick="closeToast()" class="text-yellow-400 hover:text-gray-900">&times;</button>
                </div>
                <ul class="mt-2 text-gray-700 p-3 bg-gradient-to-r from-yellow-100 to-yellow-300 rounded-lg">
                    ${subjectsHtml}
                </ul>
            </div>
        `;
  toastContainer.classList.remove("hidden");
  setTimeout(() => {
    document.getElementById("toast").classList.add("toast-enter-active");
  }, 50);
}

function closeToast() {
  const toast = document.getElementById("toast");
  if (toast) {
    toast.classList.add("toast-exit");
    setTimeout(() => {
      document.getElementById("toast-container").classList.add("hidden");
    }, 500);
  }
}

//Placements – Our Key Recruiters

document.addEventListener("DOMContentLoaded", () => {
  function duplicateLogos(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    const clone = container.cloneNode(true);
  }

  duplicateLogos("logoRow1");
  duplicateLogos("logoRow2");
  duplicateLogos("logoRow3");
  duplicateLogos("affiliationRow");
});

const modal = document.getElementById("modal");
const modalImage = document.getElementById("modalImage");
const closeModal = document.getElementById("closeModal");

function openModal(url) {
  modalImage.src = url;
  modal.classList.remove("hidden");
}

closeModal.addEventListener("click", () => {
  modal.classList.add("hidden");
});

modal.addEventListener("click", () => {
  modal.classList.add("hidden");
});

window.addEventListener("load", () => {
  if (window.innerWidth <= 850) {
    new Swiper(".mySwiper1", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: "#gallery1-next",
        prevEl: "#gallery1-prev",
      },
    });
  }
});

let stepIndex = 0;
let interval;

function changeStep(index) {
  document.querySelectorAll(".step").forEach((btn) => {
    btn.classList.remove("bg-blue-900", "text-white");
    btn.classList.add("bg-gray-300", "text-black");
  });

  const activeStep = document.querySelectorAll(".step")[index];
  activeStep.classList.remove("bg-gray-300", "text-black");
  activeStep.classList.add("bg-blue-900", "text-white");

  const stepTitle = document.getElementById("step-title");
  const stepContent = document.getElementById("step-content");

  // Animation out
  stepContent.style.transform = "translateX(-20px)";
  stepContent.style.opacity = "0";

  setTimeout(() => {
    if (index === 0) {
      stepTitle.textContent = "Step 1 - Register Yourself";
      stepContent.innerHTML = `Begin your journey at GNIOT by registering online. Provide your full name, valid email ID, mobile number, state of residence, and gender. Your email ID will be your login credential for accessing the admission portal. Set a secure password to create your personalized account for future access.`;
    } else if (index === 1) {
      stepTitle.textContent = "Step 2 - Verify E-mail";
      stepContent.innerHTML = `After registration, check your email for a verification link from GNIOT. Click on the link to verify your email and activate your admission portal account. This step is crucial to proceed with your application.`;
    } else if (index === 2) {
      stepTitle.textContent = "Step 3 - Fill Application Form Online";
      stepContent.innerHTML = `Log in to your GNIOT admission portal and complete the online application form. Enter accurate academic details, preferred course, and personal information. Double-check all details before submitting to ensure a hassle-free admission process.`;
    } else if (index === 3) {
      stepTitle.textContent = "Step 4 - Upload Required Documents";
      stepContent.innerHTML = `Upload scanned copies of necessary documents, including your academic transcripts, ID proof, passport-sized photograph, and any other required certificates. Make sure all documents are clear and legible to avoid delays in verification.`;
    } else if (index === 4) {
      stepTitle.textContent = "Step 5 - Pay Application Fee";
      stepContent.innerHTML = `Proceed to pay the application fee through the secure online payment gateway provided by GNIOT. Keep a copy of the payment receipt for future reference. Once the payment is confirmed, your application will be processed for further evaluation.`;
    }

    // Animation in
    stepContent.style.transform = "translateX(0)";
    stepContent.style.opacity = "1";
  }, 300);

  stepIndex = index;
}

function startAutoChange() {
  clearInterval(interval);
  interval = setInterval(() => {
    stepIndex = (stepIndex + 1) % 5; // 5 steps total
    changeStep(stepIndex);
  }, 3000);
}

document.addEventListener("DOMContentLoaded", () => {
  changeStep(0);
  startAutoChange();

  document.querySelectorAll(".step").forEach((btn, index) => {
    btn.addEventListener("click", () => {
      changeStep(index);
      startAutoChange();
    });
  });
});

// Awards and Recognitions Starts

var swiperImages = new Swiper(".imageSwiper", {
  slidesPerView: 1,
  spaceBetween: 15,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
  },
});

gsap.registerPlugin(MotionPathPlugin);

const dataPoints = [
  "19500+ Group Alumni Base",
  "Faculty with diverse experience",
  "Legacy of 24 years in the field of education",
  "Accredited with NAAC A+ in first cycle round",
  "20+ Certification courses for enhancement of skills",
  "Value added skills and incubations",
  "CSDC: PATHWAY TOWARDS CORPORATE READINESS",
  "CRC: SUPPORTIVE HAND FOR PLACEMENT",
];

const container = document.getElementById("circle-container");
const semiCirclePath = document.querySelector("#semiCirclePath");
let semiIndex = 0;

function createMovingCard(text) {
  const card = document.createElement("div");
  card.className =
    "absolute flex items-center justify-center sm:w-40 sm:h-40 h-20 w-20 bg-white shadow-[rgba(13,_38,_76,_0.19)_0px_0px_10px] rounded-full text-center sm:text-xs text-[8px] p-2";
  card.textContent = text;
  container.appendChild(card);

  gsap.set(card, { opacity: 0 });

  gsap.to(card, {
    opacity: 1,
    duration: 0.5,
    ease: "power1.inOut",
  });

  gsap.to(card, {
    motionPath: {
      path: semiCirclePath,
      align: semiCirclePath,
      alignOrigin: [0.5, 0.5],
      autoRotate: true,
    },
    duration: 15,
    ease: "power1.inOut",
    onComplete: () => card.remove(),
  });
}

function startAnimation() {
  setInterval(() => {
    createMovingCard(dataPoints[semiIndex]);
    semiIndex = (semiIndex + 1) % dataPoints.length;
  }, 2500);
}

startAnimation();

// video 1 script Starts
const swiper = new Swiper(".videoSwiper", {
  slidesPerView: 1,
  spaceBetween: 15,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 1, // Mobile View
    },
    641: {
      slidesPerView: 2, // Tablet View
    },
  },
});

// video 2 script Starts
const swiper1 = new Swiper(".firstSwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    641: {
      slidesPerView: 2,
    },
  },
});

const swiper2 = new Swiper(".secondSwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    641: {
      slidesPerView: 2,
    },
  },
});

// Alumni Script Starts
const cards = document.querySelectorAll(".card");
window.addEventListener("scroll", () => {
  const scrollY = window.scrollY;
  cards.forEach((card, index) => {
    const offset = scrollY / 50 - index;
    card.style.transform = `translateY(${offset}px)`;
    card.style.zIndex = `${index + 1}`;
    card.style.opacity = "1";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".unique-alumni-swiper", {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 1,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".unique-alumni-next",
      prevEl: ".unique-alumni-prev",
    },
    pagination: {
      el: ".unique-alumni-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1048: {
        slidesPerView: 4,
      },
    },
  });
});



// <!-- Logo Swap Script  
 
document.addEventListener("DOMContentLoaded", function () {
  function toggleImages() {
    document.querySelectorAll(".logo-container").forEach((container) => {
      let images = container.querySelectorAll("img");
      images[0].classList.toggle("hidden");
      images[1].classList.toggle("hidden");
    });
  }
  setInterval(toggleImages, 2500);
});




document.getElementById("menu-toggle").addEventListener("click", function () {
  document.getElementById("menu").classList.toggle("hidden");
});


tailwind.config = {
  theme: {
      extend: {
          colors: {
              primary: "#0a558c",
              secondary: "#f8fafc",
              accent: "#fbbf24",
              danger: "#dc2626",
          },
      },
  },
};

