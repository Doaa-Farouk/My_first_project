<link rel="stylesheet" href="css/course.css">
<?php 
    include 'header/header.php';
    require('connect.php');
?>
<?php
    $select_q = 'select * from courses where id=:id';
    $result = $con-> prepare($select_q);
    $result -> execute(array(":id" => $_GET['id']));
    if($result-> rowCount())
    {
        $row = $result->fetch();
        $id = $row['id'];
        $desc = $row['description'];
        $req = $row['requirements'];
        $what = $row['whattolearn'];
        $content = $row['content'];
        $img = $row['image'];
    }

?>
    <div class="section">
        <div class="image">
            <?php echo "<img src='images/$img' alt=''>" ?>
        </div>
        <div class="right">
            <div class="enroll">
                <h3>You are enrolled</h3>
                <p>You are currently enrolled</p>
                <p> in this course.</p>
            </div>
            <div class="down">
                <h3>Course Features</h3>
                <pre>cha                    8</pre>
                <hr>
                <pre>Vedios                      86</pre>
                <hr>
                <pre>Duration                    8 hours</pre>

            </div>
        </div>
    </div>
    <div class="section_2">
        <h4>Course Description</h4>
        <div class="course">
            <?php
                echo $content ."<br>";

                echo $desc;
            ?>
        </div>
        <h4>What you'll learn</h4>
        <!-- After completing this course you will be able to :
        <li> Simulate Smart home using Cisco Packet Tracer. </li>
        <li>Classify the Main Components of a Wireless Network. </li>
        <li>Differentiate between WPA and WPA2. Understand how Wi-Fi Connection works.</li>
        <li>the Wireless Attacks like denial of service attack, Jamming Attacks, Probe Requests, and Handshake Attacks.</li>
        <li>Create a Rogue AP Using Mana-Toolkit. Analyze Packet Types with Wireshark.</li>
        <li>Specify Bluetooth Vulnerabilities and attacks. Understand ZigBee Standard.</li> -->
        <?php
                echo $what;
            ?>
        <h4>Requirements</h4>
        <?php
                echo $req;
            ?>
    </div>

    <div class="section_3">
        <div class="content">
            <h2>course content</h2>
            <div class="list">Welcome</div>
            <div class="list">CH01_Wireless Network Introduction</div>
            <div class="list">CH02_Wi-Fi Attacks</div>
            <div class="list">CH03_Wi-Fi Labs Part 1</div>
            <div class="list">CH04_Wi-Fi Labs Part 2</div>
            <div class="list">CH05_RFID and NFC</div>
            <div class="list">CH06_RFID and NFC Labs</div>
            <div class="list">CH07_Bluetooth Attacks</div>
            <div class="list">What is Next?</div>
        </div>
        <form action="" method="post">
            <div class="comment">
                <h3>Add a Comment & Review</h3>
                <textarea name="" id="" cols="30" rows="15" placeholder="  Add comment"></textarea>
                <div>
                    <input name="comment" type="submit" value="Save Comment" class="com">
                </div>

            </div>
        </form>

    </div>
<?php
include 'header/footer.php';