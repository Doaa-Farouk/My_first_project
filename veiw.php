<link rel="stylesheet" href="css/veiw.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
    include "header/header.php";
?>
    <div class="container">
        <header>
            <h3>6 Courses</h3>
            <!-- will be given from number of courses in the db
                number of courses will by given by sum function -->
                <form action="" method="post">
                    <select>
                        <option value=""></option>
                        <option value="CyberSec1">Cyber Security1</option>
                        <option value="CyberSec2">Cyber Security2</option>
                        <option value="CyberSec3">Cyber Security3</option>
                        <option value="CyberSec1">Cyber Security1</option>
                        <option value="CyberSec2">Cyber Security2</option>
                        <option value="CyberSec3">Cyber Security3</option>
                    </select>
                    <span>
                        <input type="search" placeholder="Search Courses" id="search">
                        <label for="search"><i class="fas fa-search"></i></label>
                    </span>
                </form>
        </header>
<?php
    $select_q = 'select * from courses where cat_id=:id';
    $result = $con->prepare($select_q);
    $result->execute(array(":id" =>$_GET['id']));
        if($result->rowCount())
        {
            $row = $result->fetchAll();
            foreach($row as $r)
            {
                $id = $r['id'];
                $name = $r['name'];
                // $cat_name = $r['cat_name']; //can be done when selecting from two tables
                echo 
                "<div class='articles'>
                    <article>
                        <div class='img'>
                            <span class='category'>";
                            $select_q = 'select * from categories where id=:id';
                            $result = $con->prepare($select_q);
                            $result->execute(array(':id' =>$_GET['id']));
                            if($result->rowCount())
                            {
                                    $row = $result->fetch();
                                    $cat_id = $row['id'];
                                    $cat_name = $row['name'];
                                    
                                    echo $cat_name;
                            }
                            echo "
                            </span>
                            <a href='course.php'>Previw Course</a>
                        </div>
                        <div class='info'>
                            <h4>";
                            
                            echo $cat_name;
                            echo 
                            "</h4>
                                <h2 class='name'>
                                <a href='course.php?id=$id' target='_blank'>$name</a>
                                            
                                </h2>
                                <div class='down'>
                                    <p><i class='fas fa-user'></i>41753</p>
                                    <p class='sale'>FREE</p>
                                </div>
                            </div>
                        </article>
                    </div> 
                    <hr>"
                    ;
            }
        }

?>
            
    </div>


<?php
    include "header/footer.php";
