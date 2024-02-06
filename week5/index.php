<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Student Catalog</h1>
            </div>
        </div>
        <?php 
            $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
            $query = 'SELECT id, fname, lname, mark, grade, imageURL FROM students';

            $students = mysqli_query($connect, $query);

            if(mysqli_connect_error()){
                die("Connection error: " . mysqli_connect_error());
            }

        ?>

        <div class="container">
            <div class="row">
            
            <?php
            foreach($students as $students){

                if($students['mark'] < 50){
                    $bgClass = 'bg-danger';
                }
                else {
                    $bgClass = 'bg-success';
                }

                echo '<div class="col-md-4">
                <div class="card" '.$bgClass.' >
                    <img src=" '.$students['imageURL'].' " class="card-img-top" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">'.$students['fname'].''.$students['lname'].'</h5>
                        Marks: '.$students['mark'].'
                    </div>
                </div>
                </div>';
            }
            ?>
            

            </div>
        </div>

    </div>
</body>
</html>


