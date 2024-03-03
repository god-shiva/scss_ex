// const divEl = document.querySelector("div.active");
// divEl.style.color = "yellow";
// divEl.nextElementSibling.style.color = "green"; 이후
// divEl.previousElementSibling.style.color = "red"; 이전
// divEl.parentElement.style.background = "black"; 상위요소


/*탭메뉴구현*/
const tabLists = document.querySelectorAll('.tabImg .txt li');
const tabImg = document.querySelector('.tabImg .img img');

tabLists.forEach((tab, idx) => {
  tab.addEventListener('click', () => {

    const imgNumber = ['silver__ewtogmck6iaa', 'gray__bgpkxezb541u', 'blue__eik72mi59l8i', 'pink__eft54pivzaaa', 'green__cojfdv19zyeu']

    tabLists.forEach((e) => {
      e.classList.remove('on')
    })
    tabLists[idx].classList.add('on')
    tabImg.setAttribute('src', 'https://www.apple.com/kr/airpods-max/e/images/overview/router_ar_' + imgNumber[idx] + '_large.jpg')
  })
})


/*video 제어*/
function video_controller(btn, video) {
  const click_class = "stop";
  btn.addEventListener('click', () => {
    btn.classList.toggle(click_class);
    if (video.paused) {
      video.play();
    } else {
      video.pause();
    }
  })
}

video_controller(document.querySelector('.sc2 button'), document.querySelector('.sc2 video'));
video_controller(document.querySelector('.sc3 button'), document.querySelector('.sc3 video'));


const sc1 = document.querySelector('.sc1');
const sc1_img = document.querySelector('.sc1 img');
const sc1_tit = document.querySelector('.sc1 h2');
const sc2 = document.querySelector('.sc2');
const sc2_video = document.querySelector('.sc2 video');
const sc2_txt = document.querySelector('.sc2 .txt');


/*-----------------------sc1-----------------------*/
gsap.from(sc1_img, { //from 시작지점 시작시 
  scale: 1.2,
  duration: 1,
  delay: 0.5,
  autoAlpha: 0
});
gsap.from(sc1_tit, { //form 시작지점
  autoAlpha: 0,
  delay: 1.2,
  duration: 1,
});

gsap.fromTo(sc1_img, {
  //스크롤 이전
  scale: 1,
}, {
  scrollTrigger: {
    trigger: sc1, //시작점
    start: 'top -5%', //트리거 상단 뷰포트 상단 (타겟 위치/ 윈도우 위치)
    end: 'bottom -5%', // 끝 위치
    scrub: .2, //스크롤시 지연시간
    markers: false,  //마크
  }, //스크롤 이후
  scale: 1.2,
});

gsap.fromTo(sc1_tit, {
  scale: 1,
}, {
  scrollTrigger: {
    trigger: sc1,
    start: 'top -5%',
    end: 'bottom -5%',
    scrub: .2,
    markers: false,
  },
  scale: .5,
});

/*-----------------------sc2-----------------------*/
gsap.fromTo(sc2_video, {
  //스크롤 이전
  autoAlpha: 0,
}, {
  scrollTrigger: {
    trigger: sc2,
    start: '-80% top',
    end: '15% top',
    scrub: .2,
    markers: false,
  },
  autoAlpha: 1,
});


const sc2_li = document.querySelectorAll(".sc2 li");
sc2_li.forEach((el, i) => {

  const miliseconds = 200; //초단위

  // 객체 데이터
  const data = [
    {
      start1: 10,
      end1: 20,
      start2: 25,
      end2: 30,
    },
    {
      start1: 30,
      end1: 40,
      start2: 45,
      end2: 50,
    },
    {
      start1: 50,
      end1: 60,
      start2: 65,
      end2: 70,
    },
    {
      start1: 70,
      end1: 80,
      start2: 85,
      end2: 90,
    }
  ];

  gsap.to(el, { //from 시작지점 시작시 
    autoAlpha: 0,
    translateY: "+=" + miliseconds,
  });

  gsap.fromTo(el, {
  }, {
    scrollTrigger: {
      trigger: sc2,
      start: data[i].start1 + "% center", //10, 30 , 50, 70
      end: data[i].end1 + "% center",  //20, ,40, 60, 80
      scrub: .8,
    },
    autoAlpha: 1,
    translateY: "0",
  });
  gsap.fromTo(el, {
  }, {
    scrollTrigger: {
      trigger: sc2,
      start: data[i].start2 + "% center", //25, 45, 65, 85
      end: data[i].end2 + "% center", //30, 50, 70, 90
      scrub: .8,
    },
    autoAlpha: 0,
    translateY: "-=" + miliseconds,
  });
});


// const sc2_btn = document.querySelector(".sc2 button"); 
// const click_class = "stop";


// sc2_btn.addEventListener('click', () => {
//   sc2_btn.classList.toggle(click_class);
//   if (sc2_video.paused) {
//     sc2_video.play();
//   } else {
//     sc2_video.pause();
//   }
// })



/*-----------------------sc3-----------------------*/

const sc3_p = document.querySelectorAll('.captions p');


sc3_p.forEach((el_p, i) => {

  const counter = [80, 85, 90, 95];
  gsap.fromTo(el_p, {
    autoAlpha: 0,
  }, {
    scrollTrigger: {
      trigger: '.captions',
      start: counter[i] + '% center',
      end: (counter[i] + 5) + '% center',
      scrub: .5,
      markers: false,
    },
    autoAlpha: 1,
  });
});

gsap.fromTo(".sc3 .scrollImg article.left img", {
  translateY: '-=250',
}, {
  scrollTrigger: {
    trigger: '.sc3 .scrollImg article.left',
    start: 'top center',
    end: 'bottom center',
    scrub: 1,
    markers: false,
  },
  translateY: '+=250',
});


//canvas
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d'); // 2d이미지
canvas.width = 800;
canvas.height = 980; // 캔버스크기
const frameCount = 45; // 프레임카운트 45장
const currentFrame = (idx) => {
  return `https://www.apple.com/105/media/us/airpods-max/2020/996b980b-3131-44f1-af6c-fe72f9b3bfb5/anim/turn/large_2x/large_2x_${idx.toString().padStart(4, '0')}.jpg`; // 자릿수치환 0001~
  //return `https://www.apple.com/v/airpods-max/e/images/overview/design_hero_cups__ddp0h9jo${idx.toString().padStart(2, '0')}gm_large.png`;


}; // 리턴 필수

const images = [];
const card = {
  frame: 0,
};
for (let i = 0; i < frameCount; i++) {
  const img = new Image();
  img.src = currentFrame(i + 1);
  images.push(img);
} // 반복문 통해서 프레임 수 증가
gsap.to(card, {
  frame: frameCount - 1,
  snap: 'frame',
  ease: 'none',
  scrollTrigger: {
    trigger: '.frameBox',
    scrub: 1,
    start: 'top top',
    end: 'bottom bottom', //+=500% 내 영역이 5배만큼 가상스크롤
    //markers:true,
    // pin:true -> 고정 
    // 리퀘스트 애니메이션
  },
  onUpdate: render,
});
images[0].onload = render;
function render() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  // ctx.drawImage(images[card.frame], 0, 0 ,575,696);
  ctx.drawImage(images[card.frame], 0, 0, 800, 980);
}



/*-----------------------sc5-----------------------*/

const sc5_img = document.querySelectorAll('.imgBox .img img');
const sc5_txt = document.querySelectorAll('.imgBox .txt dl');



sc5_img.forEach((sc5_img, i) => {
  const imgData = ['-100', 30, 50]
  gsap.fromTo(sc5_img, {
    autoAlpha: 0,
    visibility: 'hidden'
  }, {
    scrollTrigger: {
      trigger: '.imgBox .txt',
      start: imgData[i] + '% top',
      end: imgData[i] + '% top',
      scrub: 1,
      markers: false,
    },
    autoAlpha: 1,
    visibility: 'visible'
  });
});

let sc5_fixed = ScrollTrigger.create({
  trigger: ".imgBox", //시작점
  pin: '.imgBox .img', //특정 엘리먼트 고정
  start: "top top",
  endTrigger: '.imgBox', //끝점
  end: 'bottom bottom',
  pinType: 'fixed', // transform fixed
  markers: false
});


sc5_txt.forEach((sc5_txt, i) => {
  const showData = [10, 30, 45]
  const hideData = [25, 45, 300]
  gsap.fromTo(sc5_txt, {
    autoAlpha: 0,
  }, {
    scrollTrigger: {
      trigger: '.imgBox .txt',
      start: showData[i] + '% top',
      end: showData[i] + '% top',
      scrub: .5,
      markers: false,
    },
    autoAlpha: 1,
  });


  gsap.fromTo(sc5_txt, {
  }, {
    scrollTrigger: {
      trigger: '.imgBox .txt',
      start: (showData[i] + 15) + '% top',
      end: (hideData[i] + 15) + '% top',
      scrub: .5,
      markers: false,
    },
    autoAlpha: 0,
  });
});



gsap.fromTo(".sc5 .scrollImg article.left div img", {
  translateY: '-=250',
}, {
  scrollTrigger: {
    trigger: '.sc5 .scrollImg article.left div',
    start: 'top center',
    end: 'bottom center',
    scrub: 1,
    markers: false,
  },
  translateY: '+=250',
});


const sc5_bt_img = document.querySelector('.sc5 .bottomBox > img');
const sc5_bt_txt = document.querySelector('.sc5 .bottomBox p');
const sc5_bt_div_bg = document.querySelector('.sc5 .bottomBox .sound');
const sc5_bt_bg = document.querySelector('.sc5 .bottomBox i');



gsap.fromTo(sc5_bt_txt, {
  //스크롤 이전
  translateY: '-=250',
}, {
  scrollTrigger: {
    trigger: '.sc5 .bottomBox', //시작점
    start: 'top center', //트리거 상단 뷰포트 상단 (타겟 위치/ 윈도우 위치)
    end: 'bottom center', // 끝 위치
    scrub: .2, //스크롤시 지연시간
    markers: false,  //마크
  }, //스크롤 이후
  translateY: '+=250'
});


gsap.fromTo(sc5_bt_div_bg, {
  //스크롤 이전
  translateY: '-=50',
  autoAlpha: 1
}, {
  scrollTrigger: {
    trigger: '.sc5 .bottomBox', //시작점
    start: 'top center', //트리거 상단 뷰포트 상단 (타겟 위치/ 윈도우 위치)
    end: '50% center', // 끝 위치
    scrub: .2, //스크롤시 지연시간
    markers: false,  //마크
  }, //스크롤 이후
  translateY: '+=50',
  autoAlpha: .2
});

gsap.fromTo(sc5_bt_img, {
  //스크롤 이전
  autoAlpha: 1
}, {
  scrollTrigger: {
    trigger: '.sc5 .bottomBox', //시작점
    start: 'top center', //트리거 상단 뷰포트 상단 (타겟 위치/ 윈도우 위치)
    end: 'bottom center', // 끝 위치
    scrub: .2, //스크롤시 지연시간
    markers: false,  //마크
  }, //스크롤 이후
  autoAlpha: .5
});

gsap.fromTo(sc5_bt_bg, {
  //스크롤 이전
  autoAlpha: 0
}, {
  scrollTrigger: {
    trigger: '.sc5 .bottomBox', //시작점
    start: 'top center', //트리거 상단 뷰포트 상단 (타겟 위치/ 윈도우 위치)
    end: 'bottom center', // 끝 위치
    scrub: .2, //스크롤시 지연시간
    markers: false,  //마크
  }, //스크롤 이후
  autoAlpha: 1
});



/*-----------------------sc6-----------------------*/


const sc6_img = document.querySelector('.scroll2Box .fixedImg > img');
const sc6_img_list = document.querySelectorAll('.scroll2Box .fixedImg .view > div');
const sc6_video = document.querySelector('.scroll2Box .fixedImg .view > div video');
const sc6_txt = document.querySelectorAll('.scroll2Box .txt dl');
const sc6_txt_list = document.querySelectorAll('.textCon .box1 dl');
const sc6_counter = document.querySelector('.sc6 .counter');

gsap.fromTo(sc6_img, {
}, {
  scrollTrigger: {
    trigger: ".scroll2Box .fixedImg", //시작점
    pin: '.scroll2Box .fixedImg', //특정 엘리먼트 고정
    start: "top 0",
    end: 'bottom bottom',
    endTrigger: '.scroll2Box', //끝점
    //  pinType: 'fixed', // transform fixed
    markers: false,
    scrub: 5,
  },
});


// sc5_img.forEach((sc6_img, i) => {
//   const imgData = [ '-100', 30, 50 ]
//   gsap.fromTo(sc5_img, {
//     autoAlpha: 0,
//     visibility: 'hidden'
//   }, {
//     scrollTrigger: {
//       trigger: '.imgBox .txt', 
//       start: imgData[i] + '% top', 
//       end: imgData[i] + '% top', 
//       scrub: 1, 
//       markers:false,
//     }, 
//     autoAlpha: 1,
//     visibility: 'visible'
//   });
// });

// let sc5_fixed = ScrollTrigger.create({
//   trigger: ".imgBox", //시작점
//   pin: '.imgBox .img', //특정 엘리먼트 고정
//   start: "top top",
//   endTrigger: '.imgBox', //끝점
//   end: 'bottom bottom',
//   pinType: 'fixed', // transform fixed
//   markers: false
// });


sc6_txt.forEach((sc6_txt, i) => {
  const showData = [-10, 20, 45]
  const hideData = [15, 35, 300]
  gsap.fromTo(sc6_txt, {
    autoAlpha: 0,
  }, {
    scrollTrigger: {
      trigger: '.scroll2Box .txt',
      start: showData[i] + '% top',
      end: showData[i] + '% top',
      scrub: .5,
      markers: false,
    },
    autoAlpha: 1,
  });


  gsap.fromTo(sc6_txt, {
  }, {
    scrollTrigger: {
      trigger: '.scroll2Box .txt',
      start: (showData[i] + 15) + '% top',
      end: (hideData[i] + 15) + '% top',
      scrub: .5,
      markers: false,
    },
    autoAlpha: 0,
  });
});


sc6_img_list.forEach((sc6_img_list, i) => {
  sc6_video.currentTime = 0;

  const showData = [-100, -5, 20, 45]
  gsap.fromTo(sc6_img_list, {
    autoAlpha: 0,
  }, {
    scrollTrigger: {

      trigger: '.scroll2Box .txt',
      start: showData[i] + '% top',
      end: showData[i] + '% top',
      scrub: 0,
      markers: false,
      onEnter: ONENTER,
      onLeave: ONENTER,
      onEnterBack: ONENTER,
      onLeaveBack: ONENTER
    },
    autoAlpha: 1,
  });
});

function ONENTER() {
  sc6_video.currentTime = 0;
  sc6_video.play();
  setTimeout(() => {
    sc6_video.pause();
  }, 7500)
}


sc6_txt_list.forEach((sc6_txt_list, i) => {
  const showData = [5, 10, 15]
  gsap.fromTo(sc6_txt_list, {
    autoAlpha: 0,
  }, {
    scrollTrigger: {

      trigger: '.textCon',
      start: showData[i] + '% center',
      end: showData[i] + '% center',
      scrub: .5,
      markers: false,
    },
    autoAlpha: 1,
  });
});


gsap.fromTo(sc6_counter, {
  textContent: 0,
}, {
  scrollTrigger: {
    trigger: '.counter',
    start: '30% center',
    end: '70% center',
    scrub: .5,
    markers: false,
  },
  duration: 3,
  ease: "power1.in",
  // snap: { textContent: 1 },
  stagger: {
    each: 1.0,
    onUpdate: function () {
      this.targets()[0].innerHTML = numberWithCommas(Math.ceil(this.targets()[0].textContent));
    },
  },
  textContent: 20,
});

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


