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
  <style>
    .inputId #result {
      display: none;
    }

    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>
<body>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- 헤더 -->
  <?php
    include 'header.php';
  ?>

  <!-- 회원가입 폼 -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="regist_ok.php" method="POST" name="registform" id="regist_form">
          <div class="modal-header">
            <h1 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill"></i> User Registration
            </h1>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="container-fluid">
                <div class="row align-items-end inputId">
                  <div class="col-md-6 mb-3">
                    <label for="inputPass" class="form-label">아이디</label>
                    <input type="text" class="form-control" id="userid" name="userid" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="button" id="checkIdBtn" value="중복확인" onclick="checkId()">
                  </div>
                  <p id="result">&nbsp;</p>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="inputPass" class="form-label">비밀번호</label>
                    <input type="password" class="form-control" id="userpass" name="userpass" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="checkPass" class="form-label">비밀번호 확인</label>
                    <input type="password" class="form-control" id="checkpass" name="checkpass" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label for="inputEmail" class="form-label">이메일</label>
                    <input type="text" class="form-control" id="useremail" name="useremail" required>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="form-check col-md-6 mb-3">
                    <input class="form-check-input" type="radio" name="usertype" value="user">
                    <label class="form-check-label" for="flexRadioDefault1">
                      객실 이용자
                    </label>
                  </div>
                  <div class="form-check col-md-6 mb-3">
                    <input class="form-check-input" type="radio" name="usertype" value="host">
                    <label class="form-check-label" for="flexRadioDefault1">
                      숙박 업체
                    </label>
                  </div>
                </div>

              </div>
            <div class="text-center mt-4 my-1">
              <button type="submit" class="btn btn-dark shadow-none">회원가입</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- 로그인 폼 -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="login_ok.php" method="POST">
          <div class="modal-header">
            <h1 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i> User Login
            </h1>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">아이디</label>
              <input type="text" class="form-control shadow-none" name="userid">
            </div>
            <div class="mb-4">
              <label class="form-label">비밀번호</label>
              <input type="password" class="form-control shadow-none" name="userpass">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">로그인</button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">비밀번호를 잊으셨나요?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./css/image/carousel/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./css/image/carousel/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./css/image/carousel/3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./css/image/carousel/4.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./css/image/carousel/5.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <!-- 예약 가능 여부 및 요금 확인 폼 -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">객실 예약 가능 여부 확인</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">체크인</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">체크아웃</label>
              <input type="date" class="form-control shadow-none">
            </div>

            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">지역</label>
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
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">인원</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>숙박 인원</option>
                <option value="1">1인실</option>
                <option value="2">2인실</option>
                <option value="3">4인실</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">확인</button>
            </div>
          </div>
        </form>
      </div>
    </row>
  </div>

  <!-- 객실 -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="./css/image/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Card title</h5>
            <h6 class="mb-4">200 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-4">
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
            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1인실
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">바로 예약하기</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">상세정보 보기</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="./css/image/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Card title</h5>
            <h6 class="mb-4">200 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-4">
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
            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1인실
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">바로 예약하기</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">상세정보 보기</a>
            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="./css/image/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Card title</h5>
            <h6 class="mb-4">200 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-4">
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
            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1인실
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">바로 예약하기</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">상세정보 보기</a>
            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">더보기</a>
      </div>
    </div>
  </div>

  <!-- 푸터 -->
  <?php
    include 'footer.php';
  ?>

</body>
</html>

<!-- 아이디 중복확인 -->
<script>
  // regist.js
  const checkId = () => {
    // userid, result 변수에 대입
    const userid = document.registform.userid;
    const result = document.querySelector('#result');

    // 중복체크 시에 한번 더 userid 입력값 체크
    if(userid.value === '') {
      alert('아이디를 입력해주세요.');
      userid.focus();
      return false;
    }
    if(userid.value.length < 4 || userid.value.length > 12){
      alert("아이디는 4자 이상 12자 이하로 입력해주세요.");
      userid.focus();
      return false;
    }

    // Ajax를 사용한 아이디 중복 체크
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
      if(xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200) {
          let txt = xhr.responseText.trim();
          if(txt === "O") {
            result.style.display = "block";
            result.style.color = "green";
            result.innerHTML = "사용할 수 있는 아이디입니다.";
          } else {
            result.style.display = "block";
            result.style.color = "red";
            result.innerHTML = "중복된 아이디입니다.";
            userid.focus();
            // 키 입력 시 result 숨김 이벤트
            userid.addEventListener("keydown", function(){
              result.style.display = "none";
            });
          }
        }
      }
    };
    xhr.open("GET", `checkId_ok.php?userid=${userid.value}`, true);
    xhr.send();
  };
</script>
