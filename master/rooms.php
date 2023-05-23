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
  <link rel="stylesheet" href="../css/common.css">
</head>

<body class="bg-light">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- 헤더 -->
  <?php require 'header.php';
  ?>


        <!-- General settings section -->

        <div class="container-fluid" id="main-content">
          <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
              <h3 class="mb-4">ROOMS</h3>

              <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">

                  <div class="text-end mb-4">
                    <button type="button" class="btn btn-dark rounded-pill shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                      <i class="bi bi-plus-square"></i> 추가
                    </button>
                    <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
                      <i class="bi bi-check-all"></i> 전체 선택
                    </a>
                    <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
                      <i class="bi bi-trash"></i> 전체 삭제
                    </a>
                  </div>

                  <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                    <table class="table table-hover border">
                      <thread class="sticky-top">
                        <tr class="bg-dark text-light">
                          <th scope="col">#</th>
                          <th scope="col">상품명</th>
                          <th scope="col">지역</th>
                          <th scope="col">가격</th>
                          <th scope="col">설비</th>
                          <th scope="col">인원</th>
                          <th scope="col">구성</th>
                        </tr>
                      </thread>
                      <tbody id="room-data">
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>

  <!-- 방 추가 모달 -->
  <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <form id="feature_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">객실 추가</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">이름</label>
                <input type="text" name="room_name" class="form-control shadow-none" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">지역</label>
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
              <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">가격</label>
                <input type="number" min="1" name="price" class="form-control shadow-none" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">설비</label>
                <div class="row align-items-center">
                  <div class="col-md-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="wifi">
                      <label class="form-check-label">
                        Wifi
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="tv">
                      <label class="form-check-label">
                        TV
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="ac">
                      <label class="form-check-label">
                        에어컨
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="heater">
                      <label class="form-check-label">
                        난방기
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">인원</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>숙박 인원</option>
                  <option value="1">1인실</option>
                  <option value="2">2인실</option>
                  <option value="3">4인실</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">이미지</label>
                <input type="file" class="form-control" id="inputGroupFile01">
              </div>
              <div class="col-12 mb-3">
                <label class="form-label fw-bold">구성</label>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="bedroom">
                      <label class="form-check-label" for="bedroom">
                        침실
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="kitchen">
                      <label class="form-check-label" for="kitchen">
                        부엌
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="bathroom">
                      <label class="form-check-label" for="bathroom">
                        화장실
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="balcony">
                      <label class="form-check-label" for="balcony">
                        베란다
                      </label>
                    </div>
                  </div>
                </div>
              </div>

          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">취소</button>
            <button type="submit" class="btn custom-bg text-white shadow-none">등록</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
