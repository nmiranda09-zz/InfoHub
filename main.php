<!DOCTYPE html>
<html>
<head>
	<title>InfoHub</title>
	<?php include "../infohub/meta.php" ?>
	
</head>
<body class="main-page">
    <div class="fixed-header">
        <?php include "../infohub/header.php" ?>

        <nav>
            <ul>
                <li><a href="#">Announcements</a></li>
                <li><a href="#">News Updates</a></li>
                <li><a href="#">Incoming Events</a></li>
                <li><a href="#">Job Postings</a></li>
                <li><a href="#">Scholarships</a></li>
                <li><a href="#">Wanted List</a></li>
                <li><a href="#">Suppliers</a></li>
                <li><a href="#">Ticket Postings</a></li>
            </ul>
        </nav>
    </div>


	<div class="page-main">
        <div class="announcement-container">
            <h2>Announcements</h2>

            <div class="main-info-container">
                <div class="company-logo">
                    <img src="images/company-placeholder-logo.png" alt="" />
                </div>

                <div class="information-block">
                    <a href="#" title="Show company profile">Department of Foreign Affairs</a>
                    <p class="information">This is a sample announcement.</p>
                </div>
            </div>

            <div class="main-info-container">
                <div class="company-logo">
                    <img src="images/company-placeholder-logo.png" alt="" />
                </div>

                <div class="information-block">
                    <a href="#" title="Show company profile">National Bureau of Investigation</a>
                    <p class="information">This is a sample announcement.</p>
                </div>
            </div>

            <div class="main-info-container">
                <div class="company-logo">
                    <img src="images/company-placeholder-logo.png" alt="" />
                </div>

                <div class="information-block">
                    <a href="#" title="Show company profile">Hall of Justice</a>
                    <p class="information">This is a sample announcement.</p>
                </div>
            </div>
        </div>


        <div class="chat-container">
            <a href="../../chat/views/chat.client.view.html" title="Go to Live Chat"><img src="../infohub/images/chat-bot-bubble.png" alt="" /></a>
        </div>
	</div>

	<?php include "../infohub/footer.php" ?>
</body>
</html>