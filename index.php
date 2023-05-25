<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header_blank.php");
$APPLICATION->SetTitle("Moscow Export Day");
$APPLICATION->SetPageProperty("description", "moscowexportday");
?>

<header class="wrapper px-0 md:px-7.5 lg:px-12.5 h-[90px] md:h-[70px] lg:h-[100px] flex items-end mb-5 lg:mb-10">
  <div class="container !py-0 flex flex-col md:flex-row gap-5 lg:gap-10 justify-center md:justify-between items-center">
    <div class="flex gap-x-5 lg:gap-x-10 items-center">
      <a href="https://www.mos.ru/dpir/" target="_blank"><img class="h-[25px] md:h-[30px] lg:h-[40px] xl:h-[45px]"
          src="./img/dpir.svg" alt=""></a>
      <a href="/" target="_blank"><img class="h-[20px] md:h-[25px] lg:h-[27px] xl:h-[30px]" src="./img/mec.svg"
          alt=""></a>
      <a class="xl:hidden" href="https://mnp2023.ru/?utm_source=mec&utm_medium=sait_glavnaya&utm_campaign=mnp"
        target="_blank"><img class="h-[15px] md:h-[20px] lg:h-[23px] xl:h-[25px]" src="./img/mnp-new.svg" alt=""></a>
      <a class="hidden xl:block" href="https://mnp2023.ru/?utm_source=mec&utm_medium=sait_glavnaya&utm_campaign=mnp"
        target="_blank"><img class="h-[15px] md:h-[20px] lg:h-[23px] xl:h-[25px]" src="./img/mnp-full.svg" alt=""></a>
    </div>
    <div class="w-full md:w-auto flex gap-x-2.5 items-center md:justify-end">
      <a class="!no-underline" href="tel:+74992888501" target="_blank">+7 (499) 288-85-01</a>
      <a class="ml-auto" href="https://t.me/moscowexport" target="_blank">
        <svg class="w-[25px] lg:w-[35px] h-[25px] lg:h-[35px]" viewBox="0 0 35 37" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <rect x="0.000488281" y="0.729492" width="34.3135" height="35.2835" rx="8.19208" fill="#FF2C7E" />
          <path
            d="M25.415 9.11577L7.00419 16.1356C5.74772 16.6346 5.75499 17.3276 6.77366 17.6367L11.5005 19.0946L22.4369 12.272C22.954 11.9609 23.4265 12.1282 23.0381 12.4691L14.1774 20.376H14.1754L14.1774 20.377L13.8514 25.1945C14.3291 25.1945 14.5398 24.9778 14.8078 24.7222L17.1037 22.5147L21.8792 26.0025C22.7598 26.482 23.3922 26.2356 23.6113 25.1965L26.7462 10.5881C27.0671 9.31598 26.2551 8.73998 25.415 9.11577Z"
            fill="white" />
        </svg>
      </a>
      <a href="https://zen.yandex.ru/id/622b5f8394c96c6ee2cdbc27" target="_blank">
        <svg class="w-[25px] lg:w-[35px] h-[25px] lg:h-[35px]" viewBox="0 0 37 36" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M18.7016 35.7885C18.9388 28.0247 19.1393 24.4823 21.8926 21.6375C24.7324 18.8839 28.2787 18.6975 36.0372 18.4467C36.0372 25.4442 36.0143 30.6779 33.5117 33.2582C30.9315 35.7612 25.9359 35.7885 18.7016 35.7885ZM3.5124 33.2582C1.0097 30.6778 0.982397 25.4447 0.982397 18.4467C1.00138 18.4473 1.02035 18.4479 1.03928 18.4484C8.75873 18.6981 12.2893 18.8915 15.1261 21.6377C16.5978 23.1582 17.3401 24.878 17.7486 27.3352C17.9392 28.4863 18.057 29.7991 18.1434 31.3292C18.2168 32.6437 18.2661 34.1184 18.3171 35.7885C11.0861 35.7885 6.09182 35.7605 3.5124 33.2582ZM18.322 0.730469H18.3171C18.0664 8.49429 17.8795 12.0366 15.1261 14.8767C14.4489 15.5333 13.7323 16.045 12.9285 16.4467C10.3565 17.7268 6.89281 17.8807 0.981934 18.0716C0.981934 11.0695 1.00936 5.84041 3.51194 3.26009C6.09212 0.752636 11.1014 0.729842 18.322 0.729842C18.322 0.730051 18.322 0.73026 18.322 0.730469ZM18.7008 0.729492C18.938 8.4932 19.1384 12.0355 21.8918 14.8758C24.7317 17.634 28.2778 17.8205 36.0364 18.0713C36.0364 11.0692 36.0135 5.84006 33.5109 3.25974C30.9307 0.752286 25.9351 0.729492 18.7008 0.729492Z"
            fill="#FF2C7E" />
        </svg>
      </a>
      <a href="https://vk.com/moscowexport" target="_blank">
        <svg class="w-[25px] lg:w-[35px] h-[25px] lg:h-[35px]" viewBox="0 0 36 36" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M23.4626 0.480957H12.7826C3.02864 0.480957 0.708496 2.8011 0.708496 12.5377V23.2176C0.708496 32.9699 3.01123 35.2918 12.7652 35.2918H23.4452C33.1974 35.2918 35.5193 32.989 35.5193 23.235V12.5551C35.5193 2.8011 33.2166 0.480957 23.4626 0.480957ZM28.8113 25.3185H26.2718C25.311 25.3185 25.0221 24.5404 23.299 22.8173C21.7951 21.3674 21.1598 21.1864 20.7787 21.1864C20.253 21.1864 20.1086 21.3309 20.1086 22.0567V24.3403C20.1086 24.9582 19.9084 25.3202 18.2949 25.3202C16.729 25.215 15.2105 24.7392 13.8645 23.9322C12.5185 23.1251 11.3835 22.0098 10.553 20.6782C8.58125 18.224 7.20931 15.3437 6.54627 12.2662C6.54627 11.885 6.69073 11.5404 7.41654 11.5404H9.95425C10.6069 11.5404 10.8419 11.831 11.0978 12.5011C12.3301 16.1284 14.4327 19.2823 15.2855 19.2823C15.6127 19.2823 15.7555 19.1378 15.7555 18.3215V14.5863C15.6476 12.8823 14.7425 12.7378 14.7425 12.1217C14.7541 11.9592 14.8286 11.8076 14.9501 11.6991C15.0716 11.5905 15.2306 11.5336 15.3934 11.5404H19.3828C19.9275 11.5404 20.1086 11.8119 20.1086 12.4646V17.5052C20.1086 18.05 20.3435 18.231 20.5071 18.231C20.8344 18.231 21.0867 18.05 21.6855 17.4512C22.9715 15.8829 24.0222 14.1356 24.8045 12.2644C24.8845 12.0396 25.0358 11.8472 25.2354 11.7165C25.4349 11.5857 25.6718 11.5239 25.9098 11.5404H28.4492C29.2098 11.5404 29.3717 11.9215 29.2098 12.4646C28.2865 14.5331 27.1439 16.4966 25.8019 18.3215C25.5286 18.7392 25.4189 18.9568 25.8019 19.4459C26.0542 19.8271 26.9437 20.5703 27.5424 21.2769C28.4125 22.1448 29.1351 23.149 29.6815 24.2498C29.8991 24.9564 29.5353 25.3202 28.8113 25.3202V25.3185Z"
            fill="#FF2C7E" />
        </svg>
      </a>
    </div>
  </div>
</header>
<!-- Начало блока -->
<!-- Конец блока -->
<section class="wrapper mb-5 md:mb-7.5 lg:mb-10">
  <div
    class="container border border-primary bg-[url(../img/top-banner.jpg)] bg-[length:40%_auto] bg-right-top bg-no-repeat">
    <div class="md:px-7.5 lg:px-12.5 py-5 md:py-7.5 lg:py-10 space-y-5 md:space-y-7.5 lg:space-y-10">
      <div class="inline-block py-1.5 px-10 bg-primary text-white uppercase h3 mb-0">Форум</div>
      <h1 class="h0 text-primary uppercase">Moscow<br>
        Export Day</h1>
      <div class="h3 font-normal">
        <span class="font-bold text-primary">26 мая</span><br>
        Сбор в 10:30<br>
        Начало в 11:00
      </div>
      <div class="h3 font-normal lg:max-w-[66.666%]"><span class="font-bold text-primary">Место проведения:</span> КРЦ
        «Остров Мечты», Москва, просп. Андропова, 1, КЗ Москва</div>
      <div class="flex flex-col md:flex-row gap-5 justify-center md:justify-start">
        <a href="#events" class="btn">программа</a>
        <a href="#request" class="btn">регистрация</a>
      </div>
    </div>
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section class="wrapper mb-5 md:mb-7.5 lg:mb-10 overflow-hidden">
  <div class="container overflow-visible p-0">
    <div class="relative flex flex-col md:flex-row primary-bg z-10 rounded-[40px]">
      <div
        class="flex items-end md:w-[50%] pt-40 pb-10 md:py-20 px-7.5 lg:px-12.5 mb-0 bg-[url(../img/why-bg.jpg)] bg-cover bg-top rounded-[40px] overflow-hidden">
        <h2 class="h0 mb-0">Открой новые горизонты бизнеса</h2>
      </div>
      <div class="relative md:w-[50%] py-10 md:py-20 px-7.5 lg:px-12.5 z-10">
        <h2>Эксперты и предприниматели расскажут:</h2>
        <ul class="checkbox">
          <li class="h3 mb-0 font-normal">Как найти новые направления для развития экспорта</li>
          <li class="h3 mb-0 font-normal">Как преодолеть барьеры во внешней торговле</li>
          <li class="h3 mb-0 font-normal">Личный опыт экспортеров</li>
          <li class="h3 mb-0 font-normal">Возможность найти новых партнеров для экспорта</li>
          <li class="h3 mb-0 font-normal">Меры поддержки ВЭД со стороны государства</li>
        </ul>
      </div>
    </div>
    <img class="absolute bottom-0 right-full translate-x-1/3 -translate-y-1/4 z-0" src="./img/rect-01.svg" alt="">
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section class="wrapper mb-5 md:mb-7.5 lg:mb-10 overflow-hidden">
  <div class="container border border-primary overflow-visible">
    <div class="py-2.5 px-5 md:px-7.5 bg-primary text-white h3">Для каких отраслей:</div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.00049 66H66.0005" stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10"
            stroke-linecap="round" stroke-linejoin="round" />
          <path
            d="M51.0005 6H21.0005C12.0005 6 9.00049 11.37 9.00049 18V66H63.0005V18C63.0005 11.37 60.0005 6 51.0005 6Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.4"
            d="M42.1811 45H29.7912C28.2612 45 26.9712 46.26 26.9712 47.82V66H44.9711V47.82C45.0011 46.26 43.7411 45 42.1811 45Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <g opacity="0.4">
            <path d="M36.0005 18V33" stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M28.5005 25.5H43.5005" stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10"
              stroke-linecap="round" stroke-linejoin="round" />
          </g>
        </svg>
        <div>Медицина и фармацевтика</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M42.6587 29.34L35.9987 32.67M35.9987 32.67L29.3386 29.34M35.9987 32.67V41.01M42.6587 9.33L35.9987 6L29.3386 9.33M15.9886 56.01L9.32861 52.68V44.34M56.0087 56.01L62.6687 52.68V44.34"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <g opacity="0.4">
            <path d="M62.6703 20.729L56.0103 24.059" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M62.6703 20.7294L56.0103 17.3994" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M62.6724 20.729V29.069" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M9.32861 20.7294L15.9886 17.3994" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M9.32861 20.729L15.9886 24.059" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M9.32861 20.729V29.069" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M35.9984 67.4096L29.3384 64.0796" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M36.0005 67.4096L42.6605 64.0796" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M36.0005 67.4098V59.0698" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </g>
        </svg>
        <div>Товары широкого потебления</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_6992_10289)">
            <path
              d="M48.9954 26.1818C48.9954 38.8472 38.7518 49.0909 26.0863 49.0909C25.0391 49.0909 24.0245 49.0254 23.0427 48.8618C11.8172 47.3891 3.17725 37.8 3.17725 26.1818C3.17725 13.5163 13.4209 3.27271 26.0863 3.27271C37.7045 3.27271 47.2936 11.9127 48.7663 23.1382C48.93 24.12 48.9954 25.1345 48.9954 26.1818Z"
              stroke="#FF2C7E" stroke-width="4.36364" stroke-linecap="round" stroke-linejoin="round" />
            <path opacity="0.4"
              d="M68.633 45.8176C68.633 58.4831 58.3893 68.7267 45.7239 68.7267C34.1057 68.7267 24.5167 60.0867 23.0439 48.8613C24.0258 49.0249 25.0403 49.0904 26.0876 49.0904C38.753 49.0904 48.9966 38.8467 48.9966 26.1813C48.9966 25.1341 48.9312 24.1195 48.7675 23.1377C59.993 24.6104 68.633 34.1994 68.633 45.8176Z"
              stroke="#FF2C7E" stroke-width="4.36364" stroke-linecap="round" stroke-linejoin="round" />
            <path opacity="0.4" d="M42.9424 42.9385L47.2297 47.1603" stroke="#FF2C7E" stroke-width="4.36364"
              stroke-linecap="round" stroke-linejoin="round" />
            <path opacity="0.4" d="M52.2683 36L48.9956 32.7273" stroke="#FF2C7E" stroke-width="4.36364"
              stroke-linecap="round" stroke-linejoin="round" />
            <path opacity="0.4" d="M35.9046 52.3635L32.6318 49.0908" stroke="#FF2C7E" stroke-width="4.36364"
              stroke-linecap="round" stroke-linejoin="round" />
          </g>
          <defs>
            <clipPath id="clip0_6992_10289">
              <rect width="72" height="72" fill="white" transform="translate(0.000488281)" />
            </clipPath>
          </defs>
        </svg>
        <div>Косметика</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M39.9005 24.3303L43.8605 32.2503C44.4005 33.3303 45.8405 34.4103 47.0405 34.5903L54.2105 35.7903C58.8005 36.5703 59.8805 39.8703 56.5805 43.1703L51.0005 48.7503C50.0705 49.6803 49.5305 51.5103 49.8305 52.8303L51.4205 59.7603C52.6805 65.2203 49.7705 67.3503 44.9405 64.5003L38.2205 60.5103C36.9905 59.7903 35.0105 59.7903 33.7805 60.5103L27.0604 64.5003C22.2304 67.3503 19.3203 65.2203 20.5803 59.7603L22.1704 52.8303C22.4704 51.5403 21.9304 49.7103 21.0004 48.7503L15.4204 43.1703C12.1204 39.8703 13.2004 36.5403 17.7904 35.7903L24.9604 34.5903C26.1604 34.3803 27.6004 33.3303 28.1404 32.2503L32.1005 24.3303C34.2305 20.0403 37.7705 20.0403 39.9005 24.3303Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.4" d="M18.0005 27V6" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path opacity="0.4" d="M54.0005 27V6" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path opacity="0.4" d="M36.0005 12V6" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
        <div>Fashion-индустрия</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M53.3705 31.4094V53.3694C53.3705 60.3594 47.7005 65.9994 40.7405 65.9994H18.6305C11.6705 65.9994 6.00049 60.3294 6.00049 53.3694V31.4094C6.00049 24.4193 11.6705 18.7793 18.6305 18.7793H40.7405C47.7005 18.7793 53.3705 24.4493 53.3705 31.4094Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.34" d="M16.5005 12V6.75" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path opacity="0.34" d="M28.5005 12V6.75" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path opacity="0.34" d="M40.5005 12V6.75" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path
            d="M65.9977 39.4806C65.9977 46.4406 60.3277 52.1106 53.3677 52.1106V26.8506C60.3277 26.8506 65.9977 32.4906 65.9977 39.4806Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.34" d="M6.00049 36H52.5305" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
        <div>Пищевая промышленность</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.4">
            <path d="M23.4028 30.6006V43.2006" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
              stroke-linejoin="round" />
            <path
              d="M23.8505 29.7C27.0814 29.7 29.7005 27.0809 29.7005 23.85C29.7005 20.6192 27.0814 18 23.8505 18C20.6197 18 18.0005 20.6192 18.0005 23.85C18.0005 27.0809 20.6197 29.7 23.8505 29.7Z"
              stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M23.4005 53.9997C26.3828 53.9997 28.8004 51.582 28.8004 48.5997C28.8004 45.6174 26.3828 43.1997 23.4005 43.1997C20.4181 43.1997 18.0005 45.6174 18.0005 48.5997C18.0005 51.582 20.4181 53.9997 23.4005 53.9997Z"
              stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M48.6017 53.9997C51.584 53.9997 54.0017 51.582 54.0017 48.5997C54.0017 45.6174 51.584 43.1997 48.6017 43.1997C45.6194 43.1997 43.2017 45.6174 43.2017 48.5997C43.2017 51.582 45.6194 53.9997 48.6017 53.9997Z"
              stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M23.6372 30.6006C24.4472 33.7506 27.3271 36.0906 30.7172 36.0606L36.8972 36.0306C41.6072 36.0006 45.6272 39.0306 47.0972 43.2606"
              stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          </g>
          <path
            d="M27.0005 66H45.0005C60.0005 66 66.0005 60 66.0005 45V27C66.0005 12 60.0005 6 45.0005 6H27.0005C12.0005 6 6.00049 12 6.00049 27V45C6.00049 60 12.0005 66 27.0005 66Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div>Высокотехнологичная продукция</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M54.0005 44.9999V56.9999C54.0005 61.9499 49.9505 65.9999 45.0005 65.9999H27.0005C22.0505 65.9999 18.0005 61.9499 18.0005 56.9999V41.9399L29.6705 41.9999C31.8605 41.9999 34.0205 42.5099 36.0005 43.4999C37.9805 44.4899 40.1405 44.9999 42.3605 44.9999H54.0005Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.4"
            d="M54.0005 32.49V45H42.3605C40.1405 45 37.9805 44.49 36.0005 43.5C34.0205 42.51 31.8605 42 29.6705 42L18.0005 41.94V32.49C18.0005 31.11 18.7806 29.22 19.7706 28.23L26.1305 21.87C26.6705 21.33 27.0005 20.55 27.0005 19.77V15H45.0005V19.77C45.0005 20.55 45.3305 21.33 45.8705 21.87L52.2305 28.23C53.2205 29.22 54.0005 31.11 54.0005 32.49Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M54.0005 48V45" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M18.0005 44.9399V41.9399" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path
            d="M43.5005 15H28.5005C26.0105 15 24.0005 12.96 24.0005 10.5C24.0005 8.04 26.0105 6 28.5005 6H43.5005C45.9905 6 48.0005 8.04 48.0005 10.5C48.0005 12.96 45.9905 15 43.5005 15Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div>Химическая промышленность</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.00049 66H66.0005" stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10"
            stroke-linecap="round" stroke-linejoin="round" />
          <path
            d="M8.85107 66.0009L9.00107 29.9107C9.00107 28.0807 9.87107 26.3409 11.3111 25.2009L32.3111 8.85082C34.4711 7.17082 37.5011 7.17082 39.6911 8.85082L60.6911 25.1708C62.1611 26.3108 63.0011 28.0507 63.0011 29.9107V66.0009"
            stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10" stroke-linejoin="round" />
          <path opacity="0.4"
            d="M46.5005 33H25.5005C23.0105 33 21.0005 35.01 21.0005 37.5V66H51.0005V37.5C51.0005 35.01 48.9905 33 46.5005 33Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M30.0005 48.75V53.25" stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10"
            stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.4" d="M31.5005 22.5H40.5005" stroke="#FF2C7E" stroke-width="4.5" stroke-miterlimit="10"
            stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div>Строительная отрасль</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M30.0005 50.8494H18.6305C8.52049 50.8494 6.00049 48.3294 6.00049 38.2194V20.2194C6.00049 10.1094 8.52049 7.58936 18.6305 7.58936H50.2205C60.3305 7.58936 62.8505 10.1094 62.8505 20.2194"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M30.0005 64.4106V50.8506" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path opacity="0.4" d="M6.00049 38.8506H30.0005" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path d="M20.2212 64.4106H30.0011" stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path
            d="M66.0013 38.3994V55.5294C66.0013 62.6394 64.2313 64.4094 57.1213 64.4094H46.4713C39.3613 64.4094 37.5913 62.6394 37.5913 55.5294V38.3994C37.5913 31.2894 39.3613 29.5195 46.4713 29.5195H57.1213C64.2313 29.5195 66.0013 31.2894 66.0013 38.3994Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.4" d="M51.7339 54.75H51.7615" stroke="#FF2C7E" stroke-width="6" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
        <div>ИТ-продукты и услуги</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M38.7605 6.77953L58.2905 17.3095C60.5705 18.5395 60.5705 22.0495 58.2905 23.2795L38.7605 33.8094C37.0205 34.7394 34.9805 34.7394 33.2405 33.8094L13.7105 23.2795C11.4305 22.0495 11.4305 18.5395 13.7105 17.3095L33.2405 6.77953C34.9805 5.84953 37.0205 5.84953 38.7605 6.77953Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.4"
            d="M10.8305 30.3906L28.9805 39.4806C31.2305 40.6206 32.6705 42.9305 32.6705 45.4505V62.6105C32.6705 65.1005 30.0605 66.6906 27.8405 65.5806L9.69049 56.4906C7.44049 55.3506 6.00049 53.0406 6.00049 50.5206V33.3606C6.00049 30.8706 8.61049 29.2805 10.8305 30.3906Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.4"
            d="M61.1686 30.3906L43.0186 39.4806C40.7686 40.6206 39.3286 42.9305 39.3286 45.4505V62.6105C39.3286 65.1005 41.9386 66.6906 44.1586 65.5806L62.3086 56.4906C64.5586 55.3506 65.9986 53.0406 65.9986 50.5206V33.3606C65.9986 30.8706 63.3886 29.2805 61.1686 30.3906Z"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div>Мебельная промышленность</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M39.1799 32.8196C45.9299 39.5696 45.9299 50.4896 39.1799 57.2096C32.4299 63.9296 21.51 63.9596 14.79 57.2096C8.07003 50.4596 8.04003 39.5396 14.79 32.8196"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
          <path opacity="0.4"
            d="M31.7732 40.2297C24.7533 33.2097 24.7533 21.8097 31.7732 14.7597C38.7932 7.70965 50.1932 7.73965 57.2432 14.7597C64.2932 21.7797 64.2632 33.1797 57.2432 40.2297"
            stroke="#FF2C7E" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div>Оборудование</div>
      </div>
      <div class="flex items-center gap-5">
        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M63 12C61.2 12 52.2 16.5 36 16.5C20.1 16.5 10.5 12 9 12C7.5 12 6 13.2 6 15V57C6 58.8 7.5 60 9 60C10.8 60 19.5 55.5 36 55.5C52.2 55.5 61.2 60 63 60C64.5 60 66 58.8 66 57V15C66 13.2 64.5 12 63 12ZM61 53.8C55 52 46.2 50.5 36 50.5C25.8 50.5 17 52 11 53.8V18.2C18.8 20.3 27.9 21.5 36 21.5C46.2 21.5 55 20 61 18.2V53.8Z"
            fill="#FF2C7E" />
          <g opacity="0.4">
            <path d="M16.5 46.2L27.6 33L33.6 40.2L42 30L55.5 46.2C49.5 45.3 42.9 45 36 45C29.1 45 22.5 45.3 16.5 46.2Z"
              fill="#FF2C7E" />
          </g>
        </svg>
        <div>Креативные индустрии</div>
      </div>
    </div>
    <div
      class="absolute top-1/2 right-full -translate-x-[1px] lg:-translate-x-[15px] -translate-y-1/2 z-0 w-[52px] overflow-hidden">
      <img class="w-[70px] lg:w-[85px] max-w-none" src="./img/xxx.svg" alt="">
    </div>
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section class="wrapper px-0 mb-5 md:mb-7.5 lg:mb-10 secondary-bg">
  <div class="run-text min-h-[25px] md:min-h-[40px]"></div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section class="wrapper mb-5 md:mb-7.5 lg:mb-10 overflow-hidden">
  <div class="container p-0 text-white font-bold overflow-visible">
    <div class="relative z-10">
      <div class="md:flex md:gap-2.5 space-y-2.5 md:space-y-0 mb-2.5">
        <div class="flex-1 h3 mb-0 bg-primary py-5 md:py-7.5 lg:py-10 px-7.5 lg:px-12.5 rounded-[40px] overflow-hidden">
          <div class="relative inline-block w-7.5 md:w-12.5 h-7.5 md:h-12.5 border border-white mb-2.5">
            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h3 mb-0">1</span>
          </div>
          <div>Встречи и деловые сессии с партнерами из Вьетнама, Нигерии, Аргентины, Мексики</div>
        </div>
        <div class="flex-1 h3 mb-0 bg-primary py-5 md:py-7.5 lg:py-10 px-7.5 lg:px-12.5 rounded-[40px] overflow-hidden">
          <div class="relative inline-block w-7.5 md:w-12.5 h-7.5 md:h-12.5 border border-white mb-2.5">
            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h3 mb-0">2</span>
          </div>
          <div>Выступления предпринимателей и федеральных, региональных органов власти в области ВЭД</div>
        </div>
        <div class="flex-1 h3 mb-0 bg-primary py-5 md:py-7.5 lg:py-10 px-7.5 lg:px-12.5 rounded-[40px] overflow-hidden">
          <div class="relative inline-block w-7.5 md:w-12.5 h-7.5 md:h-12.5 border border-white mb-2.5">
            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h3 mb-0">3</span>
          </div>
          <div>Выступления и кейс-стади от действующих экспортеров</div>
        </div>
      </div>
      <div class="md:flex md:gap-2.5 space-y-2.5 md:space-y-0">
        <div class="flex-1 h3 mb-0 bg-primary py-5 md:py-7.5 lg:py-10 px-7.5 lg:px-12.5 rounded-[40px] overflow-hidden">
          <div class="relative inline-block w-7.5 md:w-12.5 h-7.5 md:h-12.5 border border-white mb-2.5">
            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h3 mb-0">4</span>
          </div>
          <div>
            <div class="mb-5">Подробные гайды по экспортной деятельности:</div>
            <ul class="marker">
              <li>Меры поддержки</li>
              <li>Финансы</li>
              <li>Логистика и др.</li>
            </ul>
          </div>
        </div>
        <div
          class="flex-1 h3 mb-0 bg-[url(../img/digest-bg.jpg)] bg-cover bg-top h-0 md:h-auto pb-[75%] md:py-7.5 lg:py-10 px-7.5 lg:px-12.5 rounded-[40px] overflow-hidden">
        </div>
      </div>
    </div>
    <img class="absolute top-0 left-full -translate-x-1/2 translate-y-1/3 z-0 w-[100px] lg:w-[158px]" src="./img/x.svg"
      alt="">
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<!-- <section class="wrapper mb-5 md:mb-7.5 lg:mb-10">
    <div class="container flex flex-col lg:flex-row border border-primary p-0">
      <div
        class="flex items-end lg:w-[50%] h-0 lg:h-auto pb-[66.666%] lg:pb-0 bg-[url(../img/final-bg.jpg)] bg-cover bg-top lg:bg-left-top xl:bg-top rounded-[40px] overflow-hidden">
      </div>
      <div class="lg:w-[50%] py-10 lg:py-30 px-7.5 lg:px-12.5 space-y-5 lg:space-y-7.5">
        <div class="py-2.5 px-5 md:px-7.5 bg-primary text-white h3">Финал премии «Экспортер Года»</div>
        <div class="font-bold">Церемония награждения победителей и призеров</div>
        <div>Региональный конкурс «Экспортер года» проводится для МСП, ИП и крупных компаний, которые
          достигли успехов в экспортной деятельности с 1 января по 31 декабря 2022 года.</div>
        <div><span class="font-bold">Номинации:</span><br>
          «Экспортер года»<br>
          «Лучший молодой предприниматель-экспортер»<br>
          «Лучшая женщина-экспортер»</div>
        <a href="https://www.moscow-export.com/exporter-of-the-year/" class="btn" target="_blank">подробнее</a>
      </div>
    </div>
  </section> -->
<!-- Конец блока -->
<!-- Начало блока -->
<section id="events" class="wrapper mb-5 md:mb-7.5 lg:mb-10 overflow-hidden">
  <div class="container overflow-visible">
    <div class="relative z-10">
      <h2 class="text-primary uppercase mb-0">Архитектура программы</h2>
      <div class="mb-5 md:mb-10">программа дополняется и в разработке</div>
      <div class="events-switcher">
        <div class="events-tabs flex flex-col md:flex-row border border-secondary rounded-[20px] md:rounded-full">
          <div
            class="events-btn flex items-center justify-center grow py-2.5 md:py-5 px-5 rounded-full text-center cursor-pointer bg-primary text-white"
            data-target="events-3">PRO-экспорт
          </div>
          <div
            class="events-btn flex items-center justify-center grow py-2.5 md:py-5 px-5 rounded-full text-center cursor-pointer"
            data-target="events-1">
            Карта твоего экспорта
          </div>
          <div
            class="events-btn flex items-center justify-center grow py-2.5 md:py-5 px-5 rounded-full text-center cursor-pointer"
            data-target="events-2">Экспортируй прямо сейчас
          </div>
          <div
            class="events-btn flex items-center justify-center grow py-2.5 md:py-5 px-5 rounded-full text-center cursor-pointer"
            data-target="events-4">Meeting Buyers
          </div>
        </div>
        <div class="events-blocks mt-5">
          <div class="events-block" data-switcher-block="events-3">
            <div class="py-5 md:px-7.5 lg:px-12.5 font-bold border-b border-secondary">Сессии проходят зал КЗ
              «Москва»
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">11.00-12.00</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Новые цепочки поставок: как доставлять и сколько это стоит в 2023</div>
                <div class="mt-5">
                  <!-- <div>Партнерская сессия / Деловые линии</div> -->
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-mufteev.png">
                      <div class="text-small">
                        <div class="font-bold">Никита Муфтеев</div>
                        <div>Руководитель направления по развитию экспорта Почта России</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-schsntyh.png">
                      <div class="text-small">
                        <div class="font-bold">Владимир Счастных</div>
                        <div>Начальник отдела международных перевозок Деловые линии</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-smituh.png">
                      <div class="text-small">
                        <div class="font-bold">Ирина Смитюх</div>
                        <div>Заместитель генерального директора Группы компаний JUST</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-belokopytova.png">
                      <div class="text-small">
                        <div class="font-bold">Наталья Белокопытова</div>
                        <div>Руководитель направления по развитию электронной коммерции DHL</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-ryabova.png">
                      <div class="text-small">
                        <div class="font-bold">Елена Рябова</div>
                        <div>Руководитель направления дирекции по развитию бизнеса "Экспорт", Почта России</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">12.10-13.10</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Окей, мы экспортеры. Что будет дальше?</div>
                <div class="mt-5">
                  <div>Сам по себе выход на новый рынок — только начало большого пути. Как не сбиться с курса, найти
                    деньги на дальнейшее
                    масштабирование и закрепиться в долгосрочной перспективе, расскажут эксперты по ВЭД и развитию
                    бизнеса за рубежом.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-tlostanov.png">
                      <div class="text-small">
                        <div class="font-bold">Руслан Тлостанов</div>
                        <div>Руководитель международных проектов агентства ВЭД-технологий Weconn</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-klimenko.png">
                      <div class="text-small">
                        <div class="font-bold">Мила Клименко</div>
                        <div>Основатель бренда Nikk Mole</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-galkina.png">
                      <div class="text-small">
                        <div class="font-bold">Наталия Галкина</div>
                        <div>Генеральный директор компании Нейротренд</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-bokun.png">
                      <div class="text-small">
                        <div class="font-bold">Влад Бокун</div>
                        <div>Руководитель продуктов для ВЭД, Тинькофф Бизнес</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-coi.png">
                      <div class="text-small">
                        <div class="font-bold">Людмила Цой</div>
                        <div>Заместитель руководителя Департамента предпринимательства и инновационного развития г.
                          Москвы</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">13.20-14.35</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Пленарное заседание "Новые горизонты: перспективы экспорта товаров и услуг Москвы в 2023 году"
                </div>
                <div class="mt-5">
                  <div>Экспортно-ориентированные компании России продолжают внешнеэкономическую деятельность и
                    развивают бизнес на
                    дружественных направлениях, несмотря на экономические и политические реалии. О том, как
                    справляться с барьерами ВЭД (и не только) и масштабировать российские бренды на зарубежных
                    рынках,
                    обсудят представители власти и действующие экспортеры.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-fursin.png">
                      <div class="text-small">
                        <div class="font-bold">Фурсин Алексей Анатольевич</div>
                        <div>Руководитель Департамента предпринимательства и инновационного развития города Москвы
                        </div>
                      </div>
                    </div>
                    <!--<div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-nikishina.png">
                      <div class="text-small">
                        <div class="font-bold">Никишина Вероника Олеговна</div>
                        <div>Руководитель Российского экспортного центра (РЭЦ)</div>
                      </div>
                    </div>-->
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-ologbese.png">
                      <div class="text-small">
                        <div class="font-bold">Mr. Joseph Adeboboye Ologbese</div>
                        <div>Министерство региональной интеграции и связи штата Ondo, Nigeria. Почетный комиссар.
                        </div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-nidziy.png">
                      <div class="text-small">
                        <div class="font-bold">Анастасия Нидзий</div>
                        <div>Бренд-директор SPLAT</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-tomas.png">
                      <div class="text-small">
                        <div class="font-bold">Александр Томас</div>
                        <div>Директор по связям с общественностью компании NtechLab</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-tyan.png">
                      <div class="text-small">
                        <div class="font-bold">Нгуен Ван Туан</div>
                        <div>Директор Департамента международных отношений Вьетнамской торгово-промышленной палаты
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-ozman.png">
                      <div class="text-small">
                        <div class="font-bold">Дмитрий Озман</div>
                        <div>Президент Forbes Club Russia, директор по развитию Forbes Russia</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">14.50-15.50</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Партнерская сессия / Студия Лебедева<br>
                  Дьявол в деталях: как упаковка и адаптация продукта влияет на
                  продажи</div>
                <div class="mt-5">
                  <div>Как шрифты и цвета помогают продавать больше: эксперты — о важности адаптации и ориентации на
                    зарубежного потребителя.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-arseneva.png">
                      <div class="text-small">
                        <div class="font-bold">Екатерина Арсеньева</div>
                        <div>Руководитель проектов по делам государственной важности в Студии Артемия Лебедева</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-demenkov.png">
                      <div class="text-small">
                        <div class="font-bold">Никита Деменков</div>
                        <div>Руководитель партнерской программы ironov.ai Студии Артемия Лебедева</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-samoilenko.png">
                      <div class="text-small">
                        <div class="font-bold">Кира Самойленко</div>
                        <div>Креативный директор Студии Артемия Лебедева</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">16.00-17.00</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Цифровые трансграничные расчеты: тренды и перспективы</div>
                <div class="mt-5">
                  <div>Поможет ли экспортерам цифровой рубль, как государство будет контролировать международные
                    расчеты в национальных
                    валютах: экономические и финансовые тренды обсудят эксперты на сессии Moscow Export Day.<br><br>
                    Основные вопросы:<br>
                    - нюансы трансграничных платежей в текущих реалиях<br>
                    - возможность расчетов в национальны валютов<br>
                    - запуск платежей в криптовалюте</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-petrova-new.png">
                      <div class="text-small">
                        <div class="font-bold">Петрова Марьяна</div>
                        <div>Руководитель проектов по финансированию экспортно-импортных операций, АНО
                          «Информационно-аналитический центр по вопросам
                          внешнеторговой деятельности» при Министерстве промышленности и торговли Российской
                          Федерации
                        </div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-mihailishin.png">
                      <div class="text-small">
                        <div class="font-bold">Михайлишин Андрей</div>
                        <div>Генеральный директор ООО «Цифровые платежи»</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-ryabov.png">
                      <div class="text-small">
                        <div class="font-bold">Рябов Сергей</div>
                        <div>Директор по развитию ООО «Системы распределенного реестра»</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-kuzmicheva.png">
                      <div class="text-small">
                        <div class="font-bold">Кузьмичева Екатерина</div>
                        <div>Заместитель директора Департамента по работе с клиентами Международного Банка
                          экономического сотрудничества</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-kozinec.png">
                      <div class="text-small">
                        <div class="font-bold">Козинец Владимир</div>
                        <div>Президент Ассоциации корпоративных казначеев, директор Департамента казначейства и
                          управления рисками из компании ГК
                          РОЛЬФ</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-suslov.png">
                      <div class="text-small">
                        <div class="font-bold">Суслов Александр</div>
                        <div>Руководитель проектов Центра развития индийского филиала Сбербанка</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-dodon.png">
                      <div class="text-small">
                        <div class="font-bold">Додон Денис</div>
                        <div>Директор Центра инноваций АО «Альфа-Банк»</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-savelieva.png">
                      <div class="text-small">
                        <div class="font-bold">Савельева Дарья</div>
                        <div>Заместитель директора Департамента внешнеторговых операций Банка «Санкт-Петербург»
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-poroshin.png">
                      <div class="text-small">
                        <div class="font-bold">Порошин Алексей</div>
                        <div>Генеральный директор АО «Первая группа»</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="events-block hidden" data-switcher-block="events-1">
            <div class="py-5 md:px-7.5 lg:px-12.5 font-bold border-b border-secondary">Сессии проходят в Зале 3,
              этаж
              3</div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">11.00-12.00</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Восток еще ближе: ниши для развития бизнеса в странах MENA</div>
                <div class="mt-5">
                  <div>Речь пойдет о актуальной экономической ситуации в регионе, востребованных отраслях и
                    поддержке
                    экспортеров перед выходом
                    на экспорт.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-kurinnoy.png">
                      <div class="text-small">
                        <div class="font-bold">Павел Куринной</div>
                        <div>Руководитель коммерческого департамента Эрливидео</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-medvedev.png">
                      <div class="text-small">
                        <div class="font-bold">Роман Медведев</div>
                        <div>Руководитель ВЭД компании "ТК Байкалика аква"</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-ustimova.png">
                      <div class="text-small">
                        <div class="font-bold">Алена Устимова</div>
                        <div>Бизнес-партер по ВЭД и продуктам IB, Альфа-банк</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Мария Черкашина</div>
                        <div>Директор по международной аналитике и работе с партнерами Reactive.Consulting.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div
                  class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
                  <div class="min-w-[120px]">12.10-13.10</div>
                  <div>
                    <div
                      class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                      Открываем Новый Свет: что покупают в Латинской Америке</div>
                    <div class="mt-5">
                      <div>Бизнес на другом конце света: как трансформировать теплые отношения в регулярный экспорт?
                        Обсудим потенциал Москвы и
                        актуальные ниши для продаж.</div>
                      <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                        <div class="flex gap-5 items-start">
                          <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-elkin.png">
                          <div class="text-small">
                            <div class="font-bold">Владимир Елькин</div>
                            <div>Генеральный директор компании Пангея</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">12.10-13.10</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Партнерская сессия / ВЦИОМ<br>
                  Восприятие экспортируемых товаров из России в дружественные страны среди профильного сообщества
                </div>
                <div class="mt-5">
                  <div>По данным открытых источников в 2022 году товарооборот между Россией и Беларусью вырос на
                    12%.
                    Основа российского
                    экспорта в Беларусь – это сырьевые товары: минеральное топливо, нефть и продукты перегонки.
                    Также
                    Беларусь закупает у
                    российских поставщиков черные металлы, медь, алюминий и изделия из него, жемчуг, драгоценные
                    камни
                    и многое другое. При
                    этом в 2023 году отмечена положительная динамика в части экспорта продуктов животноводства в
                    Беларусь, а также во
                    Вьетнам и в Иран. Также были обозначены планы по экспорту товаров МСП.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-balakin.png">
                      <div class="text-small">
                        <div class="font-bold">Владимир Балакин</div>
                        <div>Президент Национальной Ассоциации Комплаенс</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-zlobin.png">
                      <div class="text-small">
                        <div class="font-bold">Никита Злобин</div>
                        <div>Директор по логистике А2 Express, член ассоциации по развитию логистического рынка
                          «Сообщество топ-менеджеров логистических компаний», преподаватель МАДИ ГТУ</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-gnidchenko.png">
                      <div class="text-small">
                        <div class="font-bold">Андрей Гнидченко</div>
                        <div>Ведущий эксперт Центра макроэкономического анализа и краткосрочного прогнозирования
                          (ЦМАКП)</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-zaharov.png">
                      <div class="text-small">
                        <div class="font-bold">Дмитрий Захаров</div>
                        <div>Директор РосФорум, вице-президент клуба молодых предпринимателей Росмолодежь.Бизнес
                        </div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Представитель Ассамблеи народов Евразии</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-ermolaev.png">
                      <div class="text-small">
                        <div class="font-bold">Даниил Ермолаев</div>
                        <div>Директор по развитию ВЦИОМ-Консалтинг</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">14.50-15.50</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Бизнес-сафари: как Москве развиваться на рынках Африки</div>
                <div class="mt-5">
                  <div>Ходите, дети, в Африку гулять: как трансформация развивающихся стран поможет московскому
                    бизнесу расширить географию.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-anigbogu.png">
                      <div class="text-small">
                        <div class="font-bold">Нина Анигбогу</div>
                        <div>Генеральный директор компании НУИА</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-shatunov.png">
                      <div class="text-small">
                        <div class="font-bold">Дмитрий Шатунов</div>
                        <div>Председатель комиссии по ВЭД с Республикой Алжир ТПП г. Москва</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-orlov.png">
                      <div class="text-small">
                        <div class="font-bold">Михаил Орлов</div>
                        <div>Директор Российско-Египетского Делового совета</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-veselov.png">
                      <div class="text-small">
                        <div class="font-bold">Дмитрий Веселов</div>
                        <div>Совладелец и директор ИКА «АФРОИНВЕСТ». Сопредседатель «Инвестиционная Россия». Член
                          правления Африканского международного клуба</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-bondareva.png">
                      <div class="text-small">
                        <div class="font-bold">Бондарева Инна</div>
                        <div>Генеральный директор компании ТАРГЕТТА</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">16.00-17.00</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Уголок массового потребителя: что предложить половине населения мира</div>
                <div class="mt-5">
                  <div>Made for China: почему продукция Москвы в Китае популярнее местных аналогов, и что мы можем
                    предложить азиатскому
                    потребителю.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-epifanova.png">
                      <div class="text-small">
                        <div class="font-bold">Ирина Епифанова</div>
                        <div>Генеральный директор ООО "Бизнес Панда"</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-shupeiko.png">
                      <div class="text-small">
                        <div class="font-bold">Наталья Шупейко</div>
                        <div>Эксперт по юридическому сопровождению бизнеса с Китаем China Professionals,
                          юрист-китаист, сооснователь юрфирмы</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-minarchenko.png">
                      <div class="text-small">
                        <div class="font-bold">Ксения Минарченко</div>
                        <div>Управляющая бизнес-группой ВТБ</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-smituh.png">
                      <div class="text-small">
                        <div class="font-bold">Ирина Смитюх</div>
                        <div>Заместитель генерального директора Группы компаний JUST Customs</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-dabbah.png">
                      <div class="text-small">
                        <div class="font-bold">Арсений Даббах</div>
                        <div>Основатель аналитической платформы Dsight. Эксперт в аналитике международных рынков для
                          технологических компаний, с глобальном опытом в регионе Азия.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="events-block hidden" data-switcher-block="events-2">
            <div class="py-5 md:px-7.5 lg:px-12.5 font-bold border-b border-secondary">Сессии проходят в Зале 1,
              этаж
              1</div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">11.00-12.00</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Гайд по актуальным мерам поддержки: куда можно податься прямо сейчас.</div>
                <div class="mt-5">
                  <div>Как ускорить выход на зарубежные рынки? Топ инструментов поддержки, которые реально работают.
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-stepanov.png">
                      <div class="text-small">
                        <div class="font-bold">Виталий Степанов</div>
                        <div>Генеральный директор Московского экспортного центра</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-astapenkov.png">
                      <div class="text-small">
                        <div class="font-bold">Максим Астапенков</div>
                        <div>Корпорация МСП, начальник отдела развития экспортной деятельности субъектов МСП
                          Дирекции
                          международной деятельности</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-zorkin.png">
                      <div class="text-small">
                        <div class="font-bold">Денис Зорькин</div>
                        <div>Предприниматель, продюсер акселерационных программ, ведущий трекер Акселератора ФРИИ в
                          программах GoGlobal, бизнес-ангел</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-mosolov.png">
                      <div class="text-small">
                        <div class="font-bold">Дмитрий Мосолов</div>
                        <div>Руководитель направления по международному развитию, Российский экспортный центр</div>
                      </div>
                    </div>
                    <!-- <div class="flex gap-5 items-start">
                          <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-murzenok.png">
                          <div class="text-small">
                            <div class="font-bold">Алексей Мурзенок</div>
                            <div>Директор направления по продвижению на внешних рынках, РЭЦ</div>
                          </div>
                        </div> -->
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-leer.png">
                      <div class="text-small">
                        <div class="font-bold">Артур Леер</div>
                        <div>Вице-президент российской Ассоциации экспортеров и импортеров (АЭИ), руководитель
                          юридического комитета</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">12.10-13.10</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Экспорт контента в новые регионы. Успехи и перспективы.<br><br>
                  Партнерская сессия<br>
                  Креативные индустрии/РОСКИНО</div>
                <div class="mt-5">
                  <div>Экспорт контента в новые регионы. Успехи и перспективы.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-naumova.png">
                      <div class="text-small">
                        <div class="font-bold">Екатерина Наумова</div>
                        <div>Врио генерального директора РОСКИНО</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-kabanov.png">
                      <div class="text-small">
                        <div class="font-bold">Дмитрий Кабанов</div>
                        <div>Директор по связям с индустрией и международным B2B мероприятиям РОСКИНО</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-strunevskaya.png">
                      <div class="text-small">
                        <div class="font-bold">Анна Струневская</div>
                        <div>Руководитель отдела продаж полного метра и originals, Art Pictures Distribution</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-barabanshikova.png">
                      <div class="text-small">
                        <div class="font-bold">Светлана Барабанщикова</div>
                        <div>Директор по международному развитию бизнеса Кинокомпании СТВ</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-dorohina.png">
                      <div class="text-small">
                        <div class="font-bold">Мария Дорохина</div>
                        <div>Руководитель департамента международных проектов «Союзмультфильм»</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-nikolaev-new.png">
                      <div class="text-small">
                        <div class="font-bold">Владимир Николаев</div>
                        <div>Генеральный продюсер анимационной студии «Воронеж»</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-atakisheva.png">
                      <div class="text-small">
                        <div class="font-bold">Лейла Атакишиева</div>
                        <div>Директор департамента международных продаж «Централ Партнершип»</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">14.50-15.50</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Быстро, дешево, эффективно: как экспортировать через маркетплейсы</div>
                <div class="mt-5">
                  <div>Почему зарубежные маркетплейсы — это самый быстрый путь к экспорту? Наглядные преимущества
                    онлайн-продаж, никаких
                    трудностей с логистикой и фишки для продвижения на крупнейших площадках.
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-elkin.png">
                      <div class="text-small">
                        <div class="font-bold">Владимир Елькин</div>
                        <div>CEO компании по управлению продажами на мировых маркетплейсах PANGEYA</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-kaigorodov.png">
                      <div class="text-small">
                        <div class="font-bold">Валерий Кайгородов</div>
                        <div>Основатель экспортной и маркетинговой группы компаний RUSFAIR GROUP с офисами в Китае,
                          Турции и ЮВА</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-pisareva.png">
                      <div class="text-small">
                        <div class="font-bold">Евгения Писарева</div>
                        <div>Руководитель международного сервисного отдела Алибаба в России, Казахстане и
                          Узбекситане.
                          Сертифицированный специалист и
                          автор обучающих курсов по работе на площадке Alibaba.com</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-egorushkin.png">
                      <div class="text-small">
                        <div class="font-bold">Сергей Егорушкин</div>
                        <div>Со-основатель и партнёр в B2Basket, Президент Ассоциации торгово-технологических
                          компаний. Владелец бизнеса, эксперт в области E-commerce и развития бизнеса через
                          маркетплейсы.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">16.00-17.00</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Партнёрская сесcия/ GenerationS, МШУ Сколково, ФРИИ<br><br>
                  Меняя мышление, меняем бизнес<br>
                  Как акселераторы помогают развивать компанию</div>
                <div class="mt-5">
                  <div>От теории к практике: эксперты Московской школы экспортера расскажут об основных трендах ВЭД,
                    а
                    бизнес Москвы поделится
                    опытом выхода на внешние рынки.</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-gorbenko.png">
                      <div class="text-small">
                        <div class="font-bold">Лариса Горбенко</div>
                        <div>Трекер «Акселератора ФРИИ», Эксперт по выходу на международные рынки. Консультант по
                          маркетингу и продажам: построение маркетинга, процессов и систем лидогенерации с нуля,
                          запуск на рынок/сегмент новых решений и продуктов, упаковка офферов под конкретные рынки.
                        </div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-kubinskaya.png">
                      <div class="text-small">
                        <div class="font-bold">Нина Кубинская</div>
                        <div>Эксперт по международному развитию, Департамент по акселерационным программам,
                          Акселератор GenerationS</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-roy.png">
                      <div class="text-small">
                        <div class="font-bold">Лидия Рой</div>
                        <div>Руководитель направления ВЭД программ Департамента развития федеральных проектов
                          развития
                          школы управления СКОЛКОВО</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-belyashov.png">
                      <div class="text-small">
                        <div class="font-bold">Александр Беляшов</div>
                        <div>Начальник управления развития экспорта Департамента предпринимательства и
                          инновационного
                          развития</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="events-block hidden" data-switcher-block="events-4">
            <div class="py-5 md:px-7.5 lg:px-12.5 font-bold border-b border-secondary">Сессии проходят в Зале 2,
              этаж
              2</div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">11.00-12.30</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Бизнес-диалог<br>Москва - Нигерия</div>
                <div class="mt-5">
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-larionova.png">
                      <div class="text-small">
                        <div class="font-bold">Надежда Ларионова</div>
                        <div>Заместитель генерального директора АНО «Московский экспортный центр»</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Фрайдей Акпан</div>
                        <div>Советник-посланник по торговле и инвестициям – Посольство Нигерии, Москва</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Абрахам Уильям Кофи-Уиллс</div>
                        <div>Генеральный директор Wills Smart Technology</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Бэси Нде</div>
                        <div>Генеральный директор Micromega Ltd</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Увем Сэмпсон</div>
                        <div>Председатель Организации нигерийской диаспоры, Россия (NIDO Russia)</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">11.00-12.30</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Matchmaking с зарубежными компаниями<br><br>
                  Аргентина, Мексика</div>
                <!-- <div class="mt-5">
                  </div> -->
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">12:45-14:15</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Бизнес-диалог<br>Москва - Аргентина, Мексика</div>
                <div class="mt-5">
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-larionova.png">
                      <div class="text-small">
                        <div class="font-bold">Надежда Ларионова</div>
                        <div>Заместитель генерального директора АНО «Московский экспортный центр»</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Густаво Уранга</div>
                        <div>Директор компании Bioprodu C</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Даниэль Калишук</div>
                        <div>Генеральный директор Avangard Energy</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Иван Гуэррэро</div>
                        <div>Директор мексиканской медицинской корпорации DOC</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Юлия Рюмшина</div>
                        <div>Директор по международному сотрудничеству ООО «ПО «ГЭОТАР»</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Дмитрий Одинцов</div>
                        <div>Директор по развитию компании TrueConf</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Доктор Хусам Азам</div>
                        <div>Генеральный директор Маждалина Групп, эксперт по международному сотрудничеству</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">12:45-14:15</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Matchmaking с зарубежными компаниями<br><br>
                  Нигерия</div>
                <!-- <div class="mt-5">
                                                    <div>Matchmaking с зарубежными компаниями</div>
                                                  </div> -->
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">14:30-16:00</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Бизнес-диалог<br>Москва -Вьетнам</div>
                <div class="mt-5">
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/speakers-larionova.png">
                      <div class="text-small">
                        <div class="font-bold">Надежда Ларионова</div>
                        <div>Заместитель генерального директора АНО «Московский экспортный центр»</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Ле Хонг Хан</div>
                        <div>Заместитель директора Barotex Ha Noi Company Limited</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Май Тан Фуок</div>
                        <div>Руководитель компании Good Medicine Markets Medicine JSC</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Жанна Бредихина</div>
                        <div>Руководитель отдела ВЭД ГК «Грейнрус»</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Мария Белозерова</div>
                        <div>Генеральный директор ООО «Бизнес-Геометрия»</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">16:10-17:20</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Бизнес-диалог<br>Москва - Индонезия</div>
                <div class="mt-5">
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Эди Приянто</div>
                        <div>Полномочный министр, Советник, Глава экономического отдела Посольства Республики
                          Индонезия в РФ</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Александр Попов</div>
                        <div>Председатель Комиссии по внешнеэкономическому сотрудничеству с партнерами в Индонезии
                          Московской Торгово-Промышленной
                          Палаты</div>
                      </div>
                    </div>
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Джеми Тумимомор</div>
                        <div>Председатель Торгово-Промышленной Палаты города Манадо Республики Индонезия</div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 text-small font-bold">Модератор:</div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <div class="flex gap-5 items-start">
                      <img class="shrink-0 w-[60px] h-[60px] rounded-full" src="./img/nophoto.svg">
                      <div class="text-small">
                        <div class="font-bold">Данияр Акказиев</div>
                        <div>Исполнительный директор Делового совета Россия-АСЕАН</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="flex flex-col md:flex-row gap-y-2.5 gap-x-15 py-5 md:py-10 md:px-7.5 lg:px-12.5 border-b border-primary">
              <div class="min-w-[120px]">16:10-17:20</div>
              <div>
                <div
                  class="switcher-link font-bold text-primary cursor-pointer hover:underline underline-offset-4 decoration-1">
                  Matchmaking с зарубежными компаниями<br><br>
                  Вьетнам</div>
                <!-- <div class="mt-5">
                      <div>Matchmaking с зарубежными компаниями</div>
                    </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img
      class="absolute top-0 left-full translate-x-[1px] lg:translate-x-[15px] translate-y-2/3 z-0 w-[70px] lg:w-[85px]"
      src="./img/xxx.svg" alt="">
    <img class="absolute top-1/2 right-full translate-x-[15px] -translate-y-1/2 z-0 w-[200px] lg:w-[289px]"
      src="./img/circle-01.svg" alt="">
    <img class="absolute bottom-0 left-full -translate-x-[25px] z-0" src="./img/rect-02.svg" alt="">
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section id="request" class="wrapper mb-5 md:mb-7.5 lg:mb-10 overflow-hidden">
  <div class="container border border-primary overflow-visible">
    <div class="relative z-10">
      <h2 class="text-primary">Регистрация на форум</h2>
      <? $APPLICATION->IncludeComponent(
        "bitrix:form.result.new",
        "exportday_form",
        array(
          "AJAX_MODE" => "Y",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_SHADOW" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "CACHE_TIME" => "3600",
          "CACHE_TYPE" => "A",
          "CHAIN_ITEM_LINK" => "",
          "CHAIN_ITEM_TEXT" => "",
          "COMPONENT_TEMPLATE" => "exportday_form",
          "EDIT_URL" => "",
          "IGNORE_CUSTOM_TEMPLATE" => "N",
          "LIST_URL" => "",
          "SEF_MODE" => "N",
          "SUCCESS_URL" => "",
          "USE_CAPTCHA" => "N",
          "USE_EXTENDED_ERRORS" => "Y",
          "VARIABLE_ALIASES" => array("WEB_FORM_ID" => "WEB_FORM_ID", "RESULT_ID" => "RESULT_ID",),
          "WEB_FORM_ID" => "139"
        )
      ); ?>
    </div>
    <div
      class="absolute top-0 right-full -translate-x-[10px] lg:-translate-x-[15px] translate-y-1/3 z-0 w-[70px] lg:w-[85px] h-[75px] lg:h-[90px] overflow-hidden">
      <img class="w-[70px] lg:w-[85px] max-w-none" src="./img/xxx.svg" alt="">
    </div>
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section id="request" class="wrapper mb-5 md:mb-7.5 lg:mb-10 overflow-hidden">
  <div class="container border border-primary overflow-visible text-center">
    <strong>Аккредитация на мероприятие: контакты для СМИ</strong><br>
    Ульяна Климова, <a href="tel:+79199680252" target="_blank">+7 919 968 0252</a><br>
    <a href="mailto:klimova.ug@moscow-export.ru" target="_blank">klimova.ug@moscow-export.ru</a>
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section class="wrapper mb-5 md:mb-7.5 lg:mb-10 overflow-visible">
  <div class="container flex flex-col md:flex-row border border-primary p-0">
    <div class="md:w-[50%] py-10 lg:py-20 pl-7.5 lg:pl-12.5">
      <h2 class="text-primary mb-0">Схема расположения форума</h2>
      <img src="./img/scheme.png" alt="">
    </div>
    <div
      class="flex items-end md:w-[50%] h-0 md:h-auto pb-[66.666%] md:pb-0 bg-[url(../img/scheme-bg.jpg)] bg-cover bg-top rounded-[40px] overflow-hidden">
    </div>
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section class="wrapper mb-5 md:mb-7.5 lg:mb-10">
  <div class="container border border-primary">
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr] gap-x-5 gap-y-5 md:gap-y-10 items-center">
      <div>
        <h2 class="text-primary">Место проведения</h2>
        <div class="mb-5 md:mb-10">КРЦ «Остров Мечты»Москва, просп. Андропова, 1</div>
        <div class="font-bold">Концертный зал Москва</div>
      </div>
      <div class="rounded-[20px] md:rounded-[40px] overflow-hidden">
        <iframe
          src="https://yandex.ru/map-widget/v1/?um=constructor%3A7ab5ae915b6826376295ece38bcf1ebd03d26da71de3acedaf6e0cd6cafd331d&amp;source=constructor"
          width="100%" height="400" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<section class="wrapper mb-5 md:mb-7.5 lg:mb-10">
  <div class="container">
    <h2 class="text-primary">Партнеры</h2>
    <div class="flex justify-center flex-wrap gap-7.5 lg:gap-10 items-center">
      <img class="w-[130px] lg:w-[170px]" src="./img/partners-roskino.png" alt="">
      <img class="w-[110px] lg:w-[140px]" src="./img/partners-vciom.png" alt="">
      <img class="w-[160px] lg:w-[250px]" src="./img/partners-bizlines.png" alt="">
      <img class="w-[110px] lg:w-[190px]" src="./img/partners-lebedev.png" alt="">
      <img class="w-[135px] lg:w-[180px]" src="./img/partners-tinkoff-new.png" alt="">
      <img class="w-[110px] lg:w-[140px]" src="./img/partners-justi.png" alt="">
      <img class="w-[165px] lg:w-[280px]" src="./img/partners-goglobal.png" alt="">
      <img class="w-[167px] lg:w-[288px]" src="./img/partners-pochta.png" alt="">
      <img class="w-[165px] lg:w-[278px]" src="./img/partners-skolkovo.png" alt="">
      <img class="w-[130px] lg:w-[170px]" src="./img/partners-baikal.png" alt="">
      <img class="w-[167px] lg:w-[288px]" src="./img/partners-gens.png" alt="">
      <img class="w-[165px] lg:w-[280px]" src="./img/partners-dhl.png" alt="">
      <img class="w-[167px] lg:w-[288px]" src="./img/partners-delros.png" alt="">
    </div>
  </div>
</section>
<!-- Конец блока -->
<!-- Начало блока -->
<footer class="secondary-bg px-7.5 lg:px-12.5 rounded-t-[40px] overflow-hidden text-white">
  <div class="py-12.5 md:py-15 lg:py-20">
    <div class="flex flex-col lg:flex-row gap-x-7.5 gap-y-5 items-center pb-7.5 border-b border-[#F3F3F3]">
      <div class="flex flex-col md:flex-row gap-x-7.5 gap-y-5 items-center">
        <div class="min-w-max"><a class="font-bold hover:text-[#F3F3F3]" href="tel:+74992888501">+7 (499)
            288-85-01</a></div>
        <div class="min-w-max"><a class="font-bold hover:text-[#F3F3F3]"
            href="mailto:info@moscow-export.ru">info@moscow-export.ru</a></div>
      </div>
      <div class="flex flex-col md:flex-row gap-x-7.5 gap-y-5 items-center lg:ml-auto">
        <div class="text-center lg:text-right"><span class="whitespace-nowrap">109028, Россия,
            Москва,</span>
          <span class="whitespace-nowrap">Хохловский переулок, 10с1</span>
        </div>
        <div class="flex gap-x-2.5">
          <a href="https://t.me/moscowexport?utm_source=shaa&utm_medium=email&utm_campaign=telegram" target="_blank">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.13043 0C1.84926 0 0 1.84926 0 4.13043V14.8696C0 17.1507 1.84926 19 4.13043 19H14.8696C17.1507 19 19 17.1507 19 14.8696V4.13043C19 1.84926 17.1507 0 14.8696 0H4.13043ZM3.60702 8.13868L15.1225 4.06575C15.648 3.84772 16.1559 4.18192 15.9552 4.92001L13.9944 13.3959C13.8573 13.9988 13.4618 14.1417 12.911 13.8635L9.92398 11.8399L8.48795 13.1207C8.48259 13.1254 8.47727 13.1301 8.47198 13.1348C8.31178 13.2769 8.17898 13.3947 7.88977 13.3947L8.09371 10.599L13.6358 6.01137C13.8787 5.81359 13.5832 5.71649 13.2598 5.89699L6.41932 9.85555L3.46283 9.00962C2.82568 8.83031 2.82113 8.4282 3.60702 8.13868Z"
                fill="white" />
            </svg>
          </a>
          <a href="https://zen.yandex.ru/id/622b5f8394c96c6ee2cdbc27" target="_blank">
            <svg width="19" height="19" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M18.7016 35.7885C18.9388 28.0247 19.1393 24.4823 21.8926 21.6375C24.7324 18.8839 28.2787 18.6975 36.0372 18.4467C36.0372 25.4442 36.0143 30.6779 33.5117 33.2582C30.9315 35.7612 25.9359 35.7885 18.7016 35.7885ZM3.5124 33.2582C1.0097 30.6778 0.982397 25.4447 0.982397 18.4467C1.00138 18.4473 1.02035 18.4479 1.03928 18.4484C8.75873 18.6981 12.2893 18.8915 15.1261 21.6377C16.5978 23.1582 17.3401 24.878 17.7486 27.3352C17.9392 28.4863 18.057 29.7991 18.1434 31.3292C18.2168 32.6437 18.2661 34.1184 18.3171 35.7885C11.0861 35.7885 6.09182 35.7605 3.5124 33.2582ZM18.322 0.730469H18.3171C18.0664 8.49429 17.8795 12.0366 15.1261 14.8767C14.4489 15.5333 13.7323 16.045 12.9285 16.4467C10.3565 17.7268 6.89281 17.8807 0.981934 18.0716C0.981934 11.0695 1.00936 5.84041 3.51194 3.26009C6.09212 0.752636 11.1014 0.729842 18.322 0.729842C18.322 0.730051 18.322 0.73026 18.322 0.730469ZM18.7008 0.729492C18.938 8.4932 19.1384 12.0355 21.8918 14.8758C24.7317 17.634 28.2778 17.8205 36.0364 18.0713C36.0364 11.0692 36.0135 5.84006 33.5109 3.25974C30.9307 0.752286 25.9351 0.729492 18.7008 0.729492Z"
                fill="white" />
            </svg>
          </a>
          <a href="https://vk.com/moscowexport" target="_blank">
            <svg width="19" height="19" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M23.4626 0.480957H12.7826C3.02864 0.480957 0.708496 2.8011 0.708496 12.5377V23.2176C0.708496 32.9699 3.01123 35.2918 12.7652 35.2918H23.4452C33.1974 35.2918 35.5193 32.989 35.5193 23.235V12.5551C35.5193 2.8011 33.2166 0.480957 23.4626 0.480957ZM28.8113 25.3185H26.2718C25.311 25.3185 25.0221 24.5404 23.299 22.8173C21.7951 21.3674 21.1598 21.1864 20.7787 21.1864C20.253 21.1864 20.1086 21.3309 20.1086 22.0567V24.3403C20.1086 24.9582 19.9084 25.3202 18.2949 25.3202C16.729 25.215 15.2105 24.7392 13.8645 23.9322C12.5185 23.1251 11.3835 22.0098 10.553 20.6782C8.58125 18.224 7.20931 15.3437 6.54627 12.2662C6.54627 11.885 6.69073 11.5404 7.41654 11.5404H9.95425C10.6069 11.5404 10.8419 11.831 11.0978 12.5011C12.3301 16.1284 14.4327 19.2823 15.2855 19.2823C15.6127 19.2823 15.7555 19.1378 15.7555 18.3215V14.5863C15.6476 12.8823 14.7425 12.7378 14.7425 12.1217C14.7541 11.9592 14.8286 11.8076 14.9501 11.6991C15.0716 11.5905 15.2306 11.5336 15.3934 11.5404H19.3828C19.9275 11.5404 20.1086 11.8119 20.1086 12.4646V17.5052C20.1086 18.05 20.3435 18.231 20.5071 18.231C20.8344 18.231 21.0867 18.05 21.6855 17.4512C22.9715 15.8829 24.0222 14.1356 24.8045 12.2644C24.8845 12.0396 25.0358 11.8472 25.2354 11.7165C25.4349 11.5857 25.6718 11.5239 25.9098 11.5404H28.4492C29.2098 11.5404 29.3717 11.9215 29.2098 12.4646C28.2865 14.5331 27.1439 16.4966 25.8019 18.3215C25.5286 18.7392 25.4189 18.9568 25.8019 19.4459C26.0542 19.8271 26.9437 20.5703 27.5424 21.2769C28.4125 22.1448 29.1351 23.149 29.6815 24.2498C29.8991 24.9564 29.5353 25.3202 28.8113 25.3202V25.3185Z"
                fill="white" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="flex gap-7.5 items-center justify-center lg:justify-start pt-7.5 text-small-size">
      <div class="min-w-max">© 2023</div>
      <div class="min-w-max">16+</div>
      <div>Московский экспортный центр. Все права защищены</div>
    </div>
  </div>
</footer>
<!-- Конец блока -->

<script src="./js/common.js?v=23051201"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer_blank.php"); ?>