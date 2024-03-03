<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=1300">
  <title>AirPods Max</title>
  <!-- reset cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <!--apple gothic-->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/font-applesdgothicneo@1.0/all.min.css">
  <!--google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- scrollMagic -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js" integrity="sha512-WFeBxQtM/n6U8/Nd0Hz/Hq7n75NImbzM7Kc0y/4kE0kHnH1Be+nzm32RwbGoDsW1D9fjjPvI8LIWxLrZhxew/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js" integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
  <link rel="stylesheet" href="./css/index.css">
  <script defer src="./js/index.js"></script>

</head>
<body>
  <div id="wrap">
    <header class="gnb">
      <h1>
        <a href="/">
          <svg height="44" viewBox="0 0 14 44" width="14" xmlns="http://www.w3.org/2000/svg">
            <path d="m13.0729 17.6825a3.61 3.61 0 0 0 -1.7248 3.0365 3.5132 3.5132 0 0 0 2.1379 3.2223 8.394 8.394 0 0 1 -1.0948 2.2618c-.6816.9812-1.3943 1.9623-2.4787 1.9623s-1.3633-.63-2.613-.63c-1.2187 0-1.6525.6507-2.644.6507s-1.6834-.9089-2.4787-2.0243a9.7842 9.7842 0 0 1 -1.6628-5.2776c0-3.0984 2.014-4.7405 3.9969-4.7405 1.0535 0 1.9314.6919 2.5924.6919.63 0 1.6112-.7333 2.8092-.7333a3.7579 3.7579 0 0 1 3.1604 1.5802zm-3.7284-2.8918a3.5615 3.5615 0 0 0 .8469-2.22 1.5353 1.5353 0 0 0 -.031-.32 3.5686 3.5686 0 0 0 -2.3445 1.2084 3.4629 3.4629 0 0 0 -.8779 2.1585 1.419 1.419 0 0 0 .031.2892 1.19 1.19 0 0 0 .2169.0207 3.0935 3.0935 0 0 0 2.1586-1.1368z"></path>
          </svg>
        </a>
      </h1>
      <nav>
        <ul>
          <li><a href="#;">스토어</a></li>
          <li><a href="#;">Mac</a></li>
          <li><a href="#;">iPad</a></li>
          <li><a href="#;">iPhone</a></li>
          <li><a href="#;">Watch</a></li>
          <li><a href="#;">AirPods</a></li>
          <li><a href="#;">TV 및 홈</a></li>
          <li><a href="#;">엔터테인먼트</a></li>
          <li><a href="#;">액세서리</a></li>
          <li><a href="#;">고객지원</a></li>
          <li>
            <a href="#;">
              <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="44px" viewBox="0 0 15 44">
                <path d="M14.298,27.202l-3.87-3.87c0.701-0.929,1.122-2.081,1.122-3.332c0-3.06-2.489-5.55-5.55-5.55c-3.06,0-5.55,2.49-5.55,5.55 c0,3.061,2.49,5.55,5.55,5.55c1.251,0,2.403-0.421,3.332-1.122l3.87,3.87c0.151,0.151,0.35,0.228,0.548,0.228 s0.396-0.076,0.548-0.228C14.601,27.995,14.601,27.505,14.298,27.202z M1.55,20c0-2.454,1.997-4.45,4.45-4.45 c2.454,0,4.45,1.997,4.45,4.45S8.454,24.45,6,24.45C3.546,24.45,1.55,22.454,1.55,20z"></path>
              </svg>
            </a>
          </li>
          <li>
            <a href="#;">
              <svg height="44" viewBox="0 0 14 44" width="14" xmlns="http://www.w3.org/2000/svg">
                <path d="m11.3535 16.0283h-1.0205a3.4229 3.4229 0 0 0 -3.333-2.9648 3.4229 3.4229 0 0 0 -3.333 2.9648h-1.02a2.1184 2.1184 0 0 0 -2.117 2.1162v7.7155a2.1186 2.1186 0 0 0 2.1162 2.1167h8.707a2.1186 2.1186 0 0 0 2.1168-2.1167v-7.7155a2.1184 2.1184 0 0 0 -2.1165-2.1162zm-4.3535-1.8652a2.3169 2.3169 0 0 1 2.2222 1.8652h-4.4444a2.3169 2.3169 0 0 1 2.2222-1.8652zm5.37 11.6969a1.0182 1.0182 0 0 1 -1.0166 1.0171h-8.7069a1.0182 1.0182 0 0 1 -1.0165-1.0171v-7.7155a1.0178 1.0178 0 0 1 1.0166-1.0166h8.707a1.0178 1.0178 0 0 1 1.0164 1.0166z"></path>
              </svg>
            </a>
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 18 18"><polyline id="globalnav-menutrigger-bread-bottom" class="globalnav-menutrigger-bread globalnav-menutrigger-bread-bottom" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" points="2 12, 16 12"><animate id="globalnav-anim-menutrigger-bread-bottom-open" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 2 12, 16 12; 2 9, 16 9; 3.5 15, 15 3.5"></animate><animate id="globalnav-anim-menutrigger-bread-bottom-close" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 3.5 15, 15 3.5; 2 9, 16 9; 2 12, 16 12"></animate></polyline><polyline id="globalnav-menutrigger-bread-top" class="globalnav-menutrigger-bread globalnav-menutrigger-bread-top" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" points="2 5, 16 5"><animate id="globalnav-anim-menutrigger-bread-top-open" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 2 5, 16 5; 2 9, 16 9; 3.5 3.5, 15 15"></animate><animate id="globalnav-anim-menutrigger-bread-top-close" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 3.5 3.5, 15 15; 2 9, 16 9; 2 5, 16 5"></animate></polyline></svg>
          </li>
        </ul>
      </nav>
    </header>
    <div class="main-menu">
      <header>
        <h2>AirPods Max</h2>
        <ul>
          <li><a href="#;">개요</a></li>
          <li><a href="#;">제품 사양</a></li>
          <li><a href="#;">비교하기</a></li>
          <li><a href="#;">구입하기</a></li>
        </ul>
      </header>
    </div>
    <main>
      <section class="sc1">
        <div>
          <img src="https://www.apple.com/v/airpods-max/e/images/overview/hero__gnfk5g59t0qe_xlarge.png" alt="">
          <h2>AirPods Max</h2>
        </div>
        <p>새롭게 선보이는 AirPods Max. 감동적인 하이파이 오디오와 AirPods 특유의 매혹적인 사용성의 완벽한 조합. 궁극의 개인 청음 기기를 드디어 만날 수 있습니다.</p>
      </section>
      <section class="sc2">
        <p><button class='stop'>버튼제어</button></p>
        <div>
          <ul class="txt">
            <li>하이파이 오디오.</li>
            <li>액티브 노이즈 캔슬링과 주변음 허용 모드.</li>
            <li>극장에 온 듯한 <br>서라운드 사운드의 개인 맞춤형 공간 음향.</li>
            <li>매끈한 디자인. 뛰어난 착용감.</li>
          </ul>
        </div>
          <video muted="" playsinline="" loop="" preload="true" autoplay src="https://www.apple.com/105/media/us/airpods-max/2020/996b980b-3131-44f1-af6c-fe72f9b3bfb5/anim/supercut/large.mp4" aria-hidden="true"></video>
      </section>
      <section class="sc3">
        <div class="tit">
          <h3><span>디자인</span>과감하리만치<br>독창적인 구조.</h3>
          <p>오버이어 헤드폰의 개념을 완전히 재구상했습니다. 그 결과 이어 쿠션부터 캐노피에 이르기까지 AirPods Max는 다양한 머리 모양에 맞는 최적의 어쿠스틱 차폐 공간을 생성하는 완벽한 핏으로 설계되어, 사운드 하나하나의 디테일에 온전히 몰입할 수 있게 해줍니다.</p>
        </div>
        <div class="frameBox">
          <div class="moving">
            <canvas id="canvas"></canvas>
          </div>
          <div class="captions">
							<p class="canopy-caption">헤드밴드의 중심부를 이루는 <strong>캐노피</strong>는 통기성이 뛰어난 니트 메시 소재로 만들어져 본체의 무게를 분산시켜 착용자의 머리에 가해지는 압력을 감소시켜줍니다.</p>
							<p class="frame-caption"><strong>스테인리스 스틸 프레임</strong>을 부드러운 터치감의 소재로 감싸 내구성, 유연성 그리고 편안한 착용감까지 놀라운 수준으로 실현해냈습니다.</p>
							<p class="tele-caption"><strong>텔레스코핑 암</strong>은 부드럽게 길이가 조절되면서도 견고하게 고정되기 때문에 안정적인 착용감과 차폐성을 선사합니다.</p>
              <p class="cups-caption"><strong>아름다운 산화 피막 알루미늄 이어컵</strong>에는 혁신적으로 설계된 메커니즘이 적용되어 있어 각각의 이어컵이 독립적으로 회전하여, 귀에 가해지는 압력을 균일하게 맞춰줍니다.</p>
						</div>
        </div>
        <div class="scrollImg">
          <article class="left">
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/design_comfort__f5gwnm9e6ci2_xlarge.jpg" alt="">
          </article>
          <article class="right">
            <div>
              <img src="https://www.apple.com/v/airpods-max/e/images/overview/design_mesh__cleb6oo85bo2_xlarge.jpg" alt="">
              <p><strong>특수 제작된 메시 직물</strong>이 이어 쿠션을 감싸고 있어, 음악 청취 시 부드러운 베개 같은 포근함을 느낄 수 있습니다.</p>
            </div>
            <div>
              <img src="https://www.apple.com/v/airpods-max/e/images/overview/design_foam__gndv3rgud4ya_xlarge.jpg" alt="">
              <p>음향학적 공법으로 설계된 메모리 폼 소재의 <strong>이어 쿠션</strong>이 몰입감 만점의 차폐 공간을 생성하고 이를 통해 놀라운 사운드를 경험하게 해줍니다.</p>
            </div>
          </article>
        </div>
        <div class="bottomBox">
          <p class="btn"><button class='stop'>버튼제어</button></p>
          <div class="txt">
            <p><strong>Digital Crown</strong>으로 정밀한 음량 조절, 트랙 전환,<br>전화 통화, Siri 호출까지 모두 가능합니다.</p>
          </div>  
          <video muted="" playsinline="" loop="" preload="true" autoplay src="https://www.apple.com/105/media/us/airpods-max/2020/996b980b-3131-44f1-af6c-fe72f9b3bfb5/anim/crown/xlarge.mp4"></video>
          <img src="https://www.apple.com/v/airpods-max/e/images/overview/design_crown_body__dnzmz5cex9ua_xlarge.png" alt="">
        </div>
      </section>
			<?php if ($is_admin) { ?>
      <section class="sc4">
        <h3>5가지 색상.<br>단조로움을 거부한다.</h3>
        <ul>
          <li>bullet</li>
          <li>bullet</li>
          <li>bullet</li>
          <li>bullet</li>
          <li>bullet</li>
        </ul>
        <div class="swiper-container">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="left"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_silver_front__g8c839jaldqy_xlarge.jpg" alt=""></div>
                <div class="right"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_silver_side__ff3nerq51ka6_xlarge.jpg" alt=""></div>
              </div>
              <div class="swiper-slide">
                <div class="left"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_gray_front__bgkzj4cnbafm_xlarge.jpg" alt=""></div>
                <div class="right"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_gray_side__gbjen9i2hram_xlarge.jpg" alt=""></div>
              </div>
              <div class="swiper-slide">
                <div class="left"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_blue_front__ddfias5frxqq_xlarge.jpg" alt=""></div>
                <div class="right"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_blue_side__e166rgbg1s02_xlarge.jpg" alt=""></div>
              </div>
              <div class="swiper-slide">
                <div class="left"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_pink_front__dbqafvrvcy6a_xlarge.jpg" alt=""></div>
                <div class="right"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_pink_side__gd261969pcmu_xlarge.jpg" alt=""></div>
              </div>
              <div class="swiper-slide">
                <div class="left"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_green_front__cqpeugza9as2_xlarge.jpg" alt=""></div>
                <div class="right"><img src="https://www.apple.com/v/airpods-max/e/images/overview/design_colors_green_side__dpusuw9jg30i_xlarge.jpg" alt=""></div>
              </div>
              <div class="swiper-slide">Slide 3</div>
              ...
          </div>
        </div>
      </section>
			<?php } ?>
      <section class="sc5">
        <div class="tit">
          <h3><span>음질</span>귀가 열리는 듯한 소리.</h3>
          <p>AirPods Max는 하이파이 오디오와 업계 최고 수준의 액티브 노이즈 캔슬링 기능으로 독보적인 청취 경험을 선사합니다. 맞춤형으로 제작된 드라이버의 각 요소가 연동하여 전체 음역대에 걸쳐 사운드 왜곡을 극한으로까지 줄여주죠. 깊고 풍부한 저음부터 정확한 중음과 선명하고 깨끗한 고음까지, 음 하나하나를 새로운 차원의 깔끔한 음질로 감상할 수 있습니다.</p>
        </div>
        <article class="imgBox">
          <div class="img">
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/audio_quality_xray_cushion__bug6vw8mdsuq_large.jpg" alt="">
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/audio_quality_xray_cushion_transparent__fo7v7epgrsa6_large.jpg" alt="">
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/audio_quality_xray_chip__f2bct8r1kdm6_large.png" alt="">
          </div>
          <div class="txt" >
            <dl>
              <dt>몰입감 넘치는 사운드</dt>
                <dd>원치 않는 외부 소음을 차단하기 위해 AirPods Max는 6개의 외향 마이크를 이용해 주변 소음을 감지하고, 2개의 내향 마이크로 당신의 귀에 들리는 사운드까지 측정합니다. 또한 빔포밍 마이크가 통화 시 당신의 음성만 잡아내기 때문에 바람이 심하게 부는 날에도 깨끗한 음질로 통화할 수 있습니다.</dd>
            </dl>
            <dl>
              <dt>모든 디테일을 빠짐없이</dt>
                <dd>Apple이 직접 설계한 다이내믹 드라이버는 폭넓은 주파수 대역의 소리를 생성합니다. 다시 말해, 사운드 하나하나가 풍부한 디테일을 자랑한다는 의미죠. 덕분에 평소에 즐기던 음악에 기존에는 들리지 않았던 질감과 정확성이 더해져 완전히 새로운 느낌으로 다가옵니다.</dd>
            </dl>
            <dl>
              <dt>왜곡 없는 재생</dt>
                <dd>고가의 플로어 스탠딩 스피커의 드라이버에나 장착되는 듀얼 네오디뮴 링 마그넷 모터가 전체 음역대에 걸쳐 총고조파 왜곡을 최소화합니다. 덕분에 최대 음량에서도 변함없이 깨끗한</dd>
            </dl>
          </div>
        </article>
        <article class="scrollBox">
          <div class="tit next">
            <h3>컴퓨테이셔널 오디오.<br>퍼포먼스 담당 센터.</h3>
            <p>각각의 이어컵에 탑재된 강력한 Apple 제작 H1 칩, 맞춤형 어쿠스틱 디자인 그리고 첨단 소프트웨어로 무장한 AirPods Max는 컴퓨테이셔널 오디오 기술을 이용해 놀라운 청취 경험을 선사합니다. 이 컴퓨테이셔널 오디오 기술은 각각의 칩에 탑재된 10개의 오디오 코어를 이용해 외부 소음을 차단하고, 이어 쿠션의 착용과 밀착 상태에 맞게 오디오를 제어하여 영화 감상 시 마치 영화 속 한가운데에 있는 것 같은 생생한 사운드를 구현합니다.</p>
          </div>
          <div class="scrollImg">
            <article class="left">
              <div>
                <img src="https://www.apple.com/v/airpods-max/e/images/overview/audio_quality_eq__bw20hke6z1ea_xlarge.jpg" alt="">
              </div>
              <p>이어 쿠션이 완성하는 맞춤형 핏과 어쿠스틱 차폐 공간에 맞춰 <strong>적응형 EQ</strong> 기술이 사운드를 조정합니다. 내향 마이크가 당신의 귀에 들리는 소리를 측정한 다음, 음악의 주파수를 조절해 풍부하면서도 일관된 청취 경험을 선사해주기 때문에 음 하나하나를 원음에 충실한 사운드로 감상할 수 있죠.</p>
            </article>
            <article class="right">
              <div>
                <img src="https://www.apple.com/v/airpods-max/e/images/overview/audio_quality_noise_cancellation__bly3c9di4wwi_xlarge.jpg" alt="">
                <p>업계 최고 수준의 <strong>액티브 노이즈 캔슬링</strong> 기능이 외부 소음을 그에 상응하는 안티 노이즈로 상쇄하기 때문에 오롯이 콘텐츠의 사운드에만 집중할 수 있습니다.</p>
                <p>소음 제어 버튼을 누르면 <strong>주변음 허용 모드</strong>로 전환됩니다. 외부 소리가 그대로 흘러 들어오기 때문에 주변 소리를 자연스럽게 들을 수 있고, 심지어는 대화도 가능하죠.</p>
              </div> 
            </article>
          </div>
        </article>
        <article class="bottomBox">
          <p><strong>동적 머리 추적 기술로 구현되는 개인 맞춤형 공간 음향</strong>을 통해 영화나 동영상을 볼 때 실제 극장에 와 있는 듯한 서라운드 사운드를 즐길 수 있습니다.1 내장 자이로스코프 및 가속도계를 통해 AirPods Max와 iPhone, iPad, 또는 Apple TV가 머리의 미세한 움직임을 추적하기 때문에, 어느 방향으로 고개를 돌려도 사운드는 정해진 위치에 고정된 채 들려오죠.<br><br>
            게다가 Apple Music에서는 동적 머리 추적 기술로 구현되는 개인 맞춤형 공간 음향을 통해 사운드가 온몸을 휘감는 듯한 3차원 오디오를 만끽할 수 있습니다.</p>
          <i>bg</i>
          <div class="sound">
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/audio_quality_spatial_rings_back__dit9t4h8r2c2_xlarge.png" alt="">
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/audio_quality_spatial_rings_front__gfrdafohuzyq_xlarge.png" alt="">
          </div>  
          <!-- <div class="human">
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/audio_quality_spatial_figure__clxltt2m0z2a_xlarge.jpg" alt="">
            
          </div> -->
          <img src="./img/mask_img.png" alt="">
        </article>
      </section>

      <section class="sc6">
        <div class="tit">
          <h3><span>매혹적인 경험</span>고도의 심플함.</h3>
          <p>AirPods Max는 AirPods 제품군이 자랑하는 간편하면서 매혹적인 사용성을 그대로 갖추고 있습니다. 설정부터 Siri 명령어까지, 매끄러운 청취 경험을 완성하기 위한 여러 기능 덕분에 낮부터 밤까지 기기를 넘나들며 당신만의 리듬에 심취할 수 있죠.</p>
        </div>
        <article class="scroll2Box">
          <div class="fixedImg">
            <div class="view">
              <div><img src="https://www.apple.com/v/airpods-max/e/images/overview/magic_features_setup_startframe__eawvps6de1yu_xlarge.jpg" alt="1-1"></div>
              <!-- <div><img src="https://www.apple.com/v/airpods-max/e/images/overview/magic_features_setup_endframe__ruo0kmyiiv62_xlarge.jpg" alt="1-2"></div> -->
              <div class="vs">
                <video muted="" playsinline="" loop="" preload="true" autoplay src="https://www.apple.com/105/media/kr/airpods-max/2020/996b980b-3131-44f1-af6c-fe72f9b3bfb5/anim/pairing/xlarge.mp4" aria-hidden="true"></video>
                <img src="https://www.apple.com/v/airpods-max/e/images/overview/magic_features_setup_endframe__ruo0kmyiiv62_xlarge.jpg" alt="1-2">
              </div>
              <div><img src="https://www.apple.com/v/airpods-max/e/images/overview/magic_features_switching__6borvcl4m3mu_xlarge.jpg" alt="2-1"></div>
              <div><img src="https://www.apple.com/v/airpods-max/e/images/overview/magic_features_sharing__bijlg7911xle_xlarge.jpg" alt="3-1"></div>
            </div>
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/magic_features_hardware__doa7mm6stg6e_xlarge.jpg" alt="">
          </div>
          <div class="txt">
            <dl>
              <dt>설정도 탭 한 번으로</dt>
                <dd>AirPods Max는 iPhone 또는 iPad와 즉시 연결됩니다. AirPods Max를 기기 가까이 가져간 다음, 화면에서 ‘연결’을 탭하기만 하면 간단히 페어링할 수 있죠.<sup>2</sup></dd>
            </dl>
            <dl>
              <dt>매끄러운 전환</dt>
                <dd>iPhone, iPad, Mac, Apple TV 간에 매끄럽게 전환하며 콘텐츠를 즐길 수 있습니다.<sup>2</sup> Mac에서 음악을 듣다가 iPhone으로 걸려온 전화를 받으면 AirPods Max가 자동으로 iPhone으로 전환됩니다.</dd>
            </dl>
            <dl>
              <dt>오디오 공유</dt>
                <dd>iPhone, iPad, iPod touch의 오디오 스트림을 두 사람이 각자의 AirPods으로 동시에 들을 수 있습니다. 음악을 재생 중인 기기 가까이에 AirPods을 추가로 가져다 대고, 탭 한 번으로 연결할 수 있죠.<sup>3</sup></dd>
            </dl>
          </div>
        </article>
        <article class="textCon">
          <h4>그 밖의 신기한 기능.</h4>
          <div class="box1">
            <dl>
              <dt>착용 감지</dt>
                <dd>AirPods Max는 벗으면 오디오를 일시 중지하고, 쓰면 다시 재생을 시작합니다. 비트 하나라도 놓칠 일이 없죠.</dd>
            </dl>
            <dl>
              <dt>알림 읽어주기</dt>
                <dd>‘알림 읽어주기’ 기능을 통해 Siri가 ‘메시지’, ‘전화’, ‘캘린더’, ‘미리 알림’ 등에서 보내는 중요한 알림이 오는 순간 자동으로 읽어주도록 할 수 있습니다.4 그리고 답장을 보낼 경우도 그냥 Siri에게 부탁만하면 됩니다. 손 하나 까딱할 필요 없이 말이죠.</dd>
            </dl>
            <dl>
              <dt>Siri 항시 대기</dt>
                <dd>간단히 “Siri야”라고 부르기만 하면 길 안내, 날씨 확인, 회의 일정 잡기 등을 간편하게 할 수 있습니다. 실행할 수 있는 명령이 더욱 다양해지면서 Siri의 쓰임새 역시 더 다양해졌죠.<sup>4</sup></dd>
            </dl>
          </div>
          <h4>자장가 같은 케이스.</h4>
          <div class="box2">
            <p>부드럽고 슬림한 <strong>Smart Case</strong>에 보관 중일 때에는 AirPods Max가 초절전 모드로 들어가 전력을 아낍니다.</p>
            <img src="https://www.apple.com/v/airpods-max/e/images/overview/magic_smart_case__e1xikczc5eoi_xlarge.jpg" alt="">
          </div>
          <h4>지치지 않는 배터리,<br>앵콜 받습니다.</h4>
          <div>
            <h5 class="counter">20</h5>
            <p>
                시간 동안 음악 감상, 영화 시청, 전화 통화를 즐길 수 있습니다.<br>
                액티브 노이즈 캔슬링 및 공간 음향을 활성화한 상태에서 말이죠.<sup>5</sup><br>
                Lightning 커넥터로 쉽게 충전할 수 있고, 급할 때는 5분만 충전해도<br>
                1.5시간 동안 음악을 감상할 수 있답니다.<sup>6</sup>
            </p>
          </div>
        </article>
        <article class="boxCon">
          <div class="tabImg">
            <div class="img">
              <img src="https://www.apple.com/kr/airpods-max/e/images/overview/router_ar_silver__ewtogmck6iaa_large.jpg" alt="">
            </div>
            <div class="txt">
              <dl>
                <dt>
                  <img src="https://www.apple.com/v/airpods-max/e/images/overview/ar-icon-update/ar_icon__eu100klfqyky_xlarge.png" alt="">
                  AirPods Max,<br>AR로 살펴보기.</dt>
                  <dd>iPhone 또는 iPad에서 이 페이지를<br>Safari로 열어보세요.</dd>
              </dl>
              <ul>
                <li class="on">
                  <a href="javascript:void(0);">
                    <i>
                      <span></span>
                    </i>
                    <p>실버</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <i>
                      <span></span>
                    </i>
                    <p>스페이스 그레이</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <i>
                      <span></span>
                    </i>
                    <p>스카이 블루</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <i>
                      <span></span>
                    </i>
                    <p>핑크</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <i>
                      <span></span>
                    </i>
                    <p>그린</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div>
            <div class="txt">
              <dl>
                <dt>자신만의 이야기를<br>새기다.</dt>
                  <dd class="small">AirPods을 위한 새로운 각인 옵션.<br>글자, 이모티콘, 숫자 조합으로 더욱 개성 있게.<a href="#;">AirPods Max 구입하기</a></dd>
              </dl>
            </div>
            <div class="img">
              <img src="https://www.apple.com/kr/airpods-max/e/images/overview/router_engraving__e8k6lcdki8q6_xlarge.jpg" alt="">
            </div>
          </div>
          <div>
            <div class="img clip">
              <img src="https://is1-ssl.mzstatic.com/image/thumb/Music112/v4/04/51/dc/0451dce5-5809-a4ac-e015-52f9490f8034/886449310944.jpg/381x381bb.jpg" alt="">
              <img src="https://www.apple.com/v/airpods-max/e/images/overview/music_album_stack__fkabj9dtjdui_large.jpg" alt="">
            </div>
            <div class="txt">
              <dl>
                <dt>
                <svg class="apple-music-logo" viewBox="0 0 83 20" aria-hidden="true">
                  <path d="M34.752 19.746V6.243h-.088l-5.433 13.503h-2.074L21.711 6.243h-.087v13.503h-2.548V1.399h3.235l5.833 14.621h.1L34.064 1.4h3.248v18.347h-2.56zm16.649 0h-2.586v-2.263h-.062c-.725 1.602-2.061 2.504-4.072 2.504-2.86 0-4.61-1.894-4.61-4.958V6.37h2.698v8.125c0 2.034.95 3.127 2.81 3.127 1.95 0 3.124-1.373 3.124-3.458V6.37H51.4v13.376zm7.394-13.618c3.06 0 5.046 1.73 5.134 4.196h-2.536c-.15-1.296-1.087-2.11-2.598-2.11-1.462 0-2.436.724-2.436 1.793 0 .839.6 1.41 2.023 1.741l2.136.496c2.686.636 3.71 1.704 3.71 3.636 0 2.442-2.236 4.12-5.333 4.12-3.285 0-5.26-1.64-5.509-4.183h2.673c.25 1.398 1.187 2.085 2.836 2.085 1.623 0 2.623-.687 2.623-1.78 0-.865-.487-1.373-1.924-1.704l-2.136-.508c-2.498-.585-3.735-1.806-3.735-3.75 0-2.391 2.049-4.032 5.072-4.032zM66.1 2.836c0-.878.7-1.577 1.561-1.577.862 0 1.55.7 1.55 1.577 0 .864-.688 1.576-1.55 1.576a1.573 1.573 0 0 1-1.56-1.576zm.212 3.534h2.698v13.376h-2.698V6.37zm14.089 4.603c-.275-1.424-1.324-2.556-3.085-2.556-2.086 0-3.46 1.767-3.46 4.64 0 2.938 1.386 4.642 3.485 4.642 1.66 0 2.748-.928 3.06-2.48H83C82.713 18.067 80.477 20 77.317 20c-3.76 0-6.208-2.62-6.208-6.942 0-4.247 2.448-6.93 6.183-6.93 3.385 0 5.446 2.213 5.683 4.845h-2.573zM10.824 3.189c-.698.834-1.805 1.496-2.913 1.398-.145-1.128.41-2.33 1.036-3.065C9.644.662 10.848.05 11.835 0c.121 1.178-.336 2.33-1.01 3.19zm.999 1.619c.624.049 2.425.244 3.578 1.98-.096.074-2.137 1.272-2.113 3.79.024 3.01 2.593 4.012 2.617 4.037-.024.074-.407 1.419-1.344 2.812-.817 1.224-1.657 2.422-3.002 2.447-1.297.024-1.73-.783-3.218-.783-1.489 0-1.97.758-3.194.807-1.297.048-2.28-1.297-3.097-2.52C.368 14.908-.904 10.408.825 7.375c.84-1.516 2.377-2.47 4.034-2.495 1.273-.023 2.45.857 3.218.857.769 0 2.137-1.027 3.746-.93z"></path>
                </svg>
                AirPods Max를 구입하면 <br>Apple Music이<br>6개월 무료.*
                </dt>
                  <dd><a href="javascript:alert('준비중입니다');">더 알아보기</a></dd>
              </dl>
            </div>
          </div>
        </article>
        <article class="priceList">
          <h4>당신에게 알맞은 AirPods은?</h4>
          <article>
            <div>
              <div><img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/compare_airpods_2nd_gen__fw52r8rxrpyu_large.png" alt=""></div>
              <dl>
                <dt>AirPods<span>2세대</span></dt>
                  <dd>₩199,000</dd>
                  <dd>
                    <a href="#;">구입하기</a>
                    <a href="#;">더 알아보기 &nbsp;&gt;</a>
                  </dd>
              </dl>
              <ul>
                <li>-</li>
                <li>-</li>
                <li>-</li>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_airpods_2nd_gen__by79soh60lqq_large.png" alt="">
                    Lightning 충전 케이스
                  </p>
                </li>
                <li>
                  <h5>5시간</h5>
                  <p>한 번 충전으로<br>최대 5시간 청취 가능 <sup>9</sup></p>
                </li>
              </ul>
            </div>
            <div>
              <div><img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/compare_airpods_3rd_gen__dyuzfy04ht0m_large.png" alt=""></div>
              <dl>
                <dt>AirPods<span>3세대</span></dt>
                  <dd>₩259,000부터</dd>
                  <dd>
                    <a href="#;">구입하기</a>
                    <a href="#;">더 알아보기 &nbsp;&gt;</a>
                  </dd>
              </dl>
              <ul>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_spatial_audio__kmoa5vlnkdmm_large.png" alt="">
                    동적 머리 추적 기술로<br>구현되는 개인 맞춤형 공간 음향<sup>1</sup>
                  </p>
                </li>
                <li>-</li>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_water_resistent__6yj92ikcoiaa_large.png" alt="">
                    땀과 습기에 강한<br>생활 방수 디자인<sup>7</sup>
                  </p>
                </li>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_airpods_3rd_gen__c9jxrgyqb1me_large.png" alt="">
                    Lightning 충전 케이스 또는<br>MagSafe 충전 케이스<sup>8</sup>
                  </p>
                </li>
                <li>
                  <h5>6시간</h5>
                  <p>한 번 충전으로<br>최대 6시간 청취 가능 <sup>9</sup></p>
                </li>
              </ul>
            </div>
            <div>
              <div><img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/compare_airpods_pro__e9uzt0mzviem_large.png" alt=""></div>
              <dl>
                <dt>AirPods Pro<span>2세대</span></dt>
                  <dd>₩359,000</dd>
                  <dd>
                    <a href="#;">구입하기</a>
                    <a href="#;">더 알아보기 &nbsp;&gt;</a>
                  </dd>
              </dl>
              <ul>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_spatial_audio__kmoa5vlnkdmm_large.png" alt="">
                    동적 머리 추적 기술로<br>구현되는 개인 맞춤형 공간 음향<sup>1</sup>
                  </p>
                </li>
                <li>
                  <p>
                    <span>
                      <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_noise_cancellation__dte2s5scoscy_large.png" alt="">
                      <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_transparency__fdepuo39ruum_large.png" alt="">
                    </span>
                    액티브 노이즈 캔슬링과<br>적응형 주변음 허용 모드
                  </p>
                </li>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_water_resistent__6yj92ikcoiaa_large.png" alt="">
                    땀과 습기에 강한<br>생활 방수 디자인<sup>7</sup>
                  </p>
                </li>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_airpods_3rd_gen__c9jxrgyqb1me_large.png" alt="">
                    스피커 및 랜야드 루프를 갖춘<br>MagSafe 충전 케이스<sup>8</sup>
                  </p>
                </li>
                <li>
                  <h5>6시간</h5>
                  <p>한 번 충전으로<br>최대 6시간 청취 가능 <sup>9</sup></p>
                </li>
              </ul>
            </div>
            <div>
              <div><img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/compare_airpods_max__b14s2x6q07rm_large.png" alt=""></div>
              <dl>
                <dt>AirPods<span>3세대</span></dt>
                  <dd>₩259,000부터</dd>
                  <dd>
                    <a href="#;">구입하기</a>
                    <a href="#;">더 알아보기 &nbsp;&gt;</a>
                  </dd>
              </dl>
              <ul>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_spatial_audio__kmoa5vlnkdmm_large.png" alt="">
                    동적 머리 추적 기술로<br>구현되는 개인 맞춤형 공간 음향<sup>1</sup>
                  </p>
                </li>
                <li>
                  <p>
                    <span>
                      <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_noise_cancellation__dte2s5scoscy_large.png" alt="">
                      <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_transparency__fdepuo39ruum_large.png" alt="">
                    </span>
                    액티브 노이즈 캔슬링과<br>주변음 허용 모드
                  </p>
                </li>
                <li>-</li>
                <li>
                  <p>
                    <img src="https://www.apple.com/v/airpods/shared/compare/b/images/compare/icon_airpods_max__utl1i3hqs6aq_large.png" alt="">
                    Smart Case
                  </p>
                </li>
                <li>
                  <h5>20시간</h5>
                  <p>한 번 충전으로<br>최대 20시간 청취 가능 <sup>9</sup></p>
                </li>
              </ul>
            </div>
          </article>
          <a href="#;">모든 AirPods 모델 비교하기 ></a>
        </article>
      </section>
      <footer>
        <section>
          <ul>
            <li>
              <a href="#;">
                <img src="https://www.apple.com/ac/globalfooter/8/ko_KR/assets/ac-buystrip/shipping/icon_large.svg" alt="">
                <dl>
                  <dt>업무일 기준 무료 익일 배송</dt>
                    <dd>오후 3시 이전에 주문된<br>재고 보유 제품에 한합니다.</dd>
                </dl>
                <i>더 알아보기</i>
              </a>
            </li>
            <li>
              <a href="#;">
                <img src="https://www.apple.com/ac/globalfooter/8/ko_KR/assets/ac-buystrip/financing/krw/icon_large.svg" alt="">
                <dl>
                  <dt>할부 방식</dt>
                    <dd>무이자 할부를 통해 Apple 제품을<br>부담 없이 구매하실 수 있습니다.</dd>
                </dl>
                <i>더 알아보기</i>
              </a>
            </li>
            <li>
              <a href="#;">
                <img src="https://www.apple.com/ac/globalfooter/8/ko_KR/assets/ac-buystrip/help/icon_large.svg" alt="">
                <dl>
                  <dt>도움이 필요하다면</dt>
                    <dd>질문이 있으신가요? 전문가와 전화로<br>상담하거나 온라인으로 채팅하세요.<br>080-330-8877로 전화 주세요.</dd>
                </dl>
                <i>문의하기</i>
              </a>
            </li>
            <li>
              <a href="#;">
                <img src="https://www.apple.com/ac/globalfooter/8/ko_KR/assets/ac-buystrip/engraving/icon_large.svg" alt="">
                <dl>
                  <dt>자신만의 것이라는 증표</dt>
                    <dd>자신의 이름이나 좋아하는 이모티콘을<br>AirPods에 각인할 수 있습니다. 무료로,<br>오직 Apple에서만.</dd>
                </dl>
                <i>더 알아보기</i>
              </a>
            </li>
          </ul>
          <article>
            <p>* 신규 가입자에게만 적용됩니다. 무료 체험 기간이 끝나면 월 8,900원에 이용할 수 있습니다. 본 프로모션은 한정된 기간 동안 신규 가입자에게만 적용되며, 신규 가입자는 적용 대상 기기를 iOS 15 또는 iPadOS 15 이후 버전이 설치된 Apple 기기에 연결해야 합니다. 무료 체험 혜택은 적용 대상 기기 페어링 이후 3개월 안에 신청할 수 있습니다. 적용 대상 기기를 이미 소유하고 있는 경우 오디오 제품을 구입하지 않아도 혜택을 받을 수 있습니다. 멤버십은 매월 자동으로 갱신되며, 해지 시 종료됩니다. 특정 제한 사항 및 기타 <a href="#;">약관</a>이 적용됩니다.</p>
            <ol>
              <li>호환되는 하드웨어 및 소프트웨어가 필요합니다. 이 기능을 지원하는 앱에서, 지원되는 콘텐츠를 재생할 때 작동합니다. Dolby Atmos로 제공되지 않는 콘텐츠도 있습니다. 공간 음향을 위한 개인 프로필을 생성하려면 TrueDepth 카메라를 탑재한 iPhone이 필요합니다. 생성된 개인 프로필은 iOS, iPadOS(올 하반기 출시 예정), macOS(올 하반기 출시 예정) 그리고 tvOS 등 최신 OS 소프트웨어가 설치된 Apple 기기 간에 동기화됩니다.</li>
              <li>iCloud 계정 및 최신 OS 소프트웨어가 설치된 호환되는 Apple 기기가 필요합니다.</li>
              <li>최신 버전 iOS가 설치된 iPhone 8 이후 모델 및 iPod touch(7세대), 최신 버전 iPadOS가 설치된 iPad Pro 12.9(2세대 이후 모델), iPad Pro 11, iPad Pro 10.5, iPad(5세대 이후 모델), iPad Air(3세대 이후 모델), iPad mini(5세대 이후 모델)에서 사용할 수 있습니다.</li>
              <li>Siri는 일부 언어와 국가에서는 지원되지 않으며, 국가별로 기능이 다를 수 있습니다. 호환되는 기기와 인터넷 연결이 필요합니다. 셀룰러 데이터 요금이 부과될 수 있습니다.</li>
              <li>테스트는 2020년 11월 Apple에서 시제품 AirPods Max, 소프트웨어와 페어링된 iPhone 12 Pro Max 및 배포 전 단계의 소프트웨어를 사용해 진행했습니다. 테스트는 AirPods Max의 오디오 재생이 중단될 때까지 iTunes Store에서 구입한 각기 다른 358곡의 오디오 트랙(256Kbps AAC 인코딩)으로 구성된 음악 재생 목록, 이동통신 전화 통화, iTunes Store에서 구입한 2시간 23분 분량의 영화 중 하나를 계속 재생하여 AirPods Max 배터리를 완전히 방전시키는 방식으로 진행되었습니다. 음량은 50%로 설정되었고, 액티브 노이즈 캔슬링과 공간 음향을 켠 상태였으며, 공간 음향은 영화 재생 중에만 작동되었습니다. 배터리 사용 시간은 기기 설정, 환경, 사용 방법 및 기타 여러 요인들에 따라 달라집니다.</li>
              <li>테스트는 2020년 11월 Apple에서 시제품 AirPods Max, 소프트웨어와 페어링된 iPhone 12 Pro Max 및 배포 전 단계의 소프트웨어를 사용해 진행했습니다. 플레이리스트는 iTunes Store에서 구입한 각기 다른 358곡의 오디오 트랙(256Kbps AAC 인코딩)으로 구성되었습니다. 음량은 50%로 설정되었고, 액티브 노이즈 캔슬링과 공간 음향을 켠 상태였지만 공간 음향이 작동되진 않았습니다. 5분 충전 테스트는 방전된 AirPods Max를 5분간 충전한 후 AirPods Max의 오디오 재생이 중단될 때까지 오디오를 계속 재생하는 방식으로 진행되었습니다. 배터리 사용 시간은 기기 설정, 환경, 사용 방법 및 기타 여러 요인들에 따라 달라집니다.</li>
              <li>AirPods(3세대) 및 AirPods Pro(2세대)는 땀과 습기에 강한 생활 방수 디자인(수상 스포츠 및 운동 제외)으로 IPX4 등급을 획득하였습니다. 땀과 습기에 강한 생활 방수 효과는 영구적이지 않습니다.</li>
              <li>MagSafe 충전 기능을 사용하려면 호환되는 MagSafe 충전기가 필요합니다. 무선 충전 기능을 사용하려면 Qi 인증 무선 충전기가 필요합니다. AirPods Pro(2세대) 충전 케이스는 Apple Watch 충전기 또는 Lightning 커넥터로도 충전할 수 있습니다.</li>
              <li>배터리 사용 시간은 기기 설정, 환경, 사용 방법 및 기타 여러 요인들에 따라 달라집니다.</li>
            </ol>
          </article>
          <p>Copyright © 2023 Apple Inc. 모든 권리 보유.</p>
          <!-- <article>
            <div>
              <div>
                <dl>
                  <dt></dt>
                    <dd><a href="#;"></a></dd>
                </dl>
              </div>
            </div>
          </article> -->
        </section>
      </footer>
    </main>
  </div>
  <!--
  https://www.apple.com/kr/airpods-max/

  <? /*
  // gsap +  스크롤트리거

  // gsap.to() //~에게 완료될 모션을 주는거
    // gsap.from() //~부터 완료전의 주는거

    // gsap.to('.sc_visual',{

    //     scrollTrigger:{
    //         trigger:".sc_visual", //시발점
    //         start:"top top",  //[타켓의 시작위치, 윈도우 시작위치]
    //         end:"bottom top",   // [타켓의 끝위치, 윈도우 끝위치]
    //         markers:true,  //표시자
    //         scrub:0.5
    //     },

    //    'background-position':'50% 20%'  
    // })

    // const jhgjhgjh = gsap.timeline({
    //     scrollTrigger:{
    //         trigger:"",
    //         start:"",
    //         end:"",
    //         markers:

    //     }

    // })

// const fixMotion = gsap.timeline({

//     scrollTrigger:{
//         trigger:".sc_intro .img_area", //시발점
//         start:"top top",  //[타켓의 시작위치, 윈도우 시작위치]
//         // end:"bottom top",   // [타켓의 끝위치, 윈도우 끝위치]
//         end:"+=5000", //강제로 스크롤5천만큼해라   // [타켓의 끝위치, 윈도우 끝위치]
//         markers:true,  //표시자
//         scrub:0.5,
//         pin:true,
//     },
// })
-->


// gsap.from(sc6_counter, {
//   textContent: 0,
//   duration: 3,
//   ease: "power1.in",
//   snap: { textContent: 1 },
//   stagger: {
//     each: 1.0,
//     onUpdate: function() {
//       this.targets()[0].innerHTML = numberWithCommas(Math.ceil(this.targets()[0].textContent));
//     },
//   }
// });


// let sections = gsap.utils.toArray(".imgBox .txt dl");

// const timeline = gsap.timeline({
//   scrollTrigger: {
//     id: "CONTAINER", // Custom label to the marker
//     trigger: ".imgBox .txt", // What element triggers the scroll
//     scrub: true, // Add a small delay of scrolling and animation. `true` is direct
//     start: "top top+=5%+", // Can be top, center, bottom
//     end: "+=100%", // Can be top, center, bottom
//     pin: true
//   }
// });

// let stagger = 0.8

// timeline
// .from(sections, {opacity: 0, stagger:stagger })
// .to(sections, {opacity: 0, stagger:stagger }, stagger)


// gsap.fromTo(".imgBox .img", {
//   position: 'static',
//   top : '0'
// }, {
//   scrollTrigger: {
//     trigger: '.imgBox', 
//     start: '0% top', 
//     end: '15% top', 
//     scrub: .1, 
//          markers:false,
//   }, 
//   position: 'sticky',
//   top : '-20%'
// });
// gsap.fromTo(".imgBox .img", { 
// }, {
//   scrollTrigger: {
//     trigger: '.imgBox', 
//     start: '-50% top', 
//     end: '20% top', 
//    // scrub: .1, 
//     markers:true,
//   }, 
//   position: 'sticky',
// }); 




// let test = ScrollTrigger.create({
//   //scroller: '#wrap',
//   //scroller: window, // 엘리먼트 or 윈도우
//   trigger: ".imgBox", //시작점
//   pin: '.imgBox .img', //특정 엘리먼트 고정
//   start: "top top",
//   endTrigger: '.imgBox', //끝점
//   end: 'bottom center',
//   pinType: 'fixed', // transform fixed
//   markers: true
// });







// gsap.fromTo(sc2_txt, {
//   //스크롤 이전
//   autoAlpha: 1,
//   top : "+=1000",
// }, {
//   scrollTrigger: {
//     trigger: '.sc2', 
//     start: '20% center', 
//     end: '40% center',
//     scrub: .2, 
//     markers:true,
//   }, 
//   autoAlpha: 1,
//   top:0,
// });

// gsap.to(sc_img,{
//     scrollTrigger:{
//         trigger:".sc1", //시발점
//         start:"center top",  //[타켓의 시작위치, 윈도우 시작위치] //트리거 상단 뷰포트 상단
//         end:"bottom bottom",   // [타켓의 끝위치, 윈도우 끝위치]
//         markers:true,  //표시자
//         scrub:10 //부드러운 스크러빙, 스크롤바 잡는데 1초 걸림
//     },

//     scale: 1.3,
// })



*/ ?>
</body>
</html>