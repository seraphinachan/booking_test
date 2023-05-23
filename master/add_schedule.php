<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<style>
/* 헤더 */
.header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 30px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 100;
}

.logo a {
  font-size: 2em;
  color: #359381;
  cursor: pointer;
  text-decoration: none;
}

.navigation a {
  text-decoration: none;
  color: #359381;
  padding: 6px 15px;
  border-radius: 20px;
  margin: 0 10px;
  font-weight: 600;
}

.navigation a:hover,
.navigation a.active {
  background: #359381;
  color: #fff;
}

/* 일정 등록 폼 */
.container
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
  margin-top: 200px; /* cover 를 header 아래로 */
 }

 .error
{
  color: red;
  font-weight: 700;
}
</style>
<?php
include '../dbconfig.php';
if(isset($_REQUEST['save-event']))
{
  $title = $_REQUEST['title'];
  $start_date = $_REQUEST['start_date'];
  $end_date = $_REQUEST['end_date'];
  $description = $_REQUEST['description'];

  $insert_query = $conn->prepare("INSERT INTO schedule_list SET title=:title, start_date=:start_date, end_date=:end_date, description=:description");
  $insert_query->bindParam(':title', $title);
  $insert_query->bindParam(':start_date', $start_date);
  $insert_query->bindParam(':end_date', $end_date);
  $insert_query->bindParam(':description', $description);
  if($insert_query->execute())
  {
    header('location: view_schedule.php');
  }
  else
  {
    $msg = "일정 등록에 오류가 발생했습니다";
  }
}
?>
<body>

  <header class="header">
    <h2 class="logo"><a href="./index.php">Logo</a></h2>
    <nav class="navigation">
      <a href="./view_schedule.php">일정 관리</a>
      <a href="./add_schedule.php">일정 등록</a>
      <a href="../logout.php">Logout</a>

      <a href="#">Service</a>
    </nav>
  </header>

    <div class="container">
    <div class="table-responsive">
    <h3 align="center">일정 등록</h3><br/>
    <div class="box">
      <form method="post" >
        <div class="form-group">
        <label for="title">일정 제목</label>
        <input type="text" name="title" id="title" placeholder="일정 제목" required
        data-parsley-type="title" data-parsley-trigger="keyup" class="form-control"/>
       </div>
       <div class="form-group">
        <label for="date">시작일 설정</label>
        <input type="date" name="start_date" id="start_date" required
        data-parsley-type="date" data-parsley-trigger="keyup" class="form-control"/>
       </div>
       <div class="form-group">
        <label for="date">종료일 설정</label>
        <input type="date" name="end_date" id="end_date" required
        data-parsley-type="date" data-parsley-trigger="keyup" class="form-control"/>
       </div>
       <div class="form-group">
         <label for="title">일정 내용</label>
         <textarea name="description" id="description" rows="5" placeholder="일정 내용을 입력해 주세요" required
         data-parsley-type="textarea" data-parsley-trigger="keyup" class="form-control"></textarea>
       </div>
       <div class="form-group">
        <input type="submit" id="save-event" name="save-event" value="일정 등록" class="btn btn-success" />
        </div>
        <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
      </form>
     </div>
   </div>
  </div>
 </body>
</html>
*/
