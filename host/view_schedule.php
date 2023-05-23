<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

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

    /* 일정 관리 */
    .calendar .center {
      width: 100%;
      position: absolute;
      margin-top: 200px; /* cover 를 header 아래로 */
      background: #fff;
      border-radius: 10px;
    }
    .calendar .center h1 {
      text-align: center;
      padding: 0 0 40px 0;
    }
    </style>

</head>
<body>

  <header class="header">
    <h2 class="logo"><a href="./index.php">Logo</a></h2>
    <nav class="navigation">
      <a href="./view_schedule.php">일정 관리</a>
      <a href="./add_schedule.php">일정 등록</a>
      <a href="./login.php">Logout</a>

      <a href="#">Service</a>
    </nav>
  </header>

<div class=calendar>
  <div class="center">
    <h1><center>Schedule Menegement</center></h2>
    <div class="container">
     <div id="calendar"></div>
    </div>
  </div>
</div>

</body>
</html>

<?php
  include '../dbconfig.php';
  $fetch_event = $conn->query("SELECT * FROM schedule_list");
 ?>

<script>
   $(document).ready(function() {
   $('#calendar').fullCalendar({

     events:[
        <?php
        while($result = $fetch_event->fetch(PDO::FETCH_ASSOC))
        { ?>
       {
           title: '<?php echo $result['title']; ?>',
           start: '<?php echo $result['start_date']; ?>',
           end: '<?php echo $result['end_date']; ?>',
           description: '<?php echo $result['description']; ?>',
           color: 'yellow',
           textColor: 'black'
        },
     <?php } ?>
              ]
   });
});
</script>
