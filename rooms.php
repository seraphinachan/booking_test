<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet">
  <!-- Icon only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/common.css">
</head>
<body>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- 헤더 -->
  <?php
    require('header.php');
  ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">체크인</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">체크아웃</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">시설</h5>
                <select class="form-select" aria-label="Default select example">
                  <option selected>숙박 지역</option>
                  <option value='1'>서울</option>
                  <option value='2'>부산</option>
                  <option value='3'>대구</option>
                  <option value='4'>인천</option>
                  <option value='5'>광주</option>
                  <option value='6'>대전</option>
                  <option value='7'>울산</option>
                  <option value='8'>강원</option>
                  <option value='9'>경기</option>
                  <option value='10'>경남</option>
                  <option value='11'>경북</option>
                  <option value='12' >전남</option>
                  <option value='13'>전북</option>
                  <option value='14'>제주</option>
                  <option value='15'>충남</option>
                  <option value='16'>충북</option>
                </select>
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">인원</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f1">1인실</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f2">2인실</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f3">4인실</label>
                </div>
              </div>
              </div>
            </div>
          </div>
        </nav>

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="css/image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room heater
                </span>
              </div>
              <div class="guest">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1인실
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class="mb-4">200 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">바로 예약하기</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">상세정보 보기</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="css/image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room heater
                </span>
              </div>
              <div class="guest">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1인실
                </span>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4">200 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">바로 예약하기</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">상세정보 보기</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="css/image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room heater
                </span>
              </div>
              <div class="guest">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1인실
                </span>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4">200 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">바로 예약하기</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">상세정보 보기</a>
            </div>
          </div>
        </div>
      </div>

      </div>



    </div>
  </div>

  <!-- 푸터 -->
  <?php
    require('footer.php');
  ?>

</body>
</html>
