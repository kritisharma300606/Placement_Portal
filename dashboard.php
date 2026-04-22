<?php
session_start();
include 'php/db.php';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Student';
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
$result = $conn->query("SELECT applications.id, jobs.title, jobs.company, jobs.location FROM applications JOIN jobs ON applications.job_id = jobs.id WHERE applications.user_id = $user_id");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - CampusHire</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar">
    <h2>CampusHire</h2>
    <ul>
        <?php if(isset($_SESSION['user_id'])): ?>
            <li><a href="index.html">Home</a></li>
            <li><a href="upcoming.html">Upcoming</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="jobs.php">Jobs</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a class="btn" href="logout.php" style="background-color:red;">Logout</a></li>
        <?php else: ?>
            <li><a href="index.html">Home</a></li>
            <li><a href="upcoming.html">Upcoming</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="jobs.php">Jobs</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a class="btn" href="register.html">Register</a></li>
        <?php endif; ?>
    </ul>
</nav>
<div style="text-align:center; color:white; margin-top:30px;">
    <h2>Welcome, <?php echo $name; ?>! 👋</h2>
    <h3>Kindly Find Your Applied Jobs👇🏻</h3>
</div>

<div style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px; padding:30px;">
<?php if($result && $result->num_rows > 0): ?>
<?php while($row = $result->fetch_assoc()): ?>
<div class="card">
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['company']; ?></p>
    <p><?php echo $row['location']; ?></p>
    <p style="color:#f5a623;">✅ Applied</p>
    <form method="POST" action="php/withdraw.php">
        <input type="hidden" name="application_id" value="<?php echo $row['id']; ?>">
        <button type="submit" style="background-color:red;">Withdraw</button>
    </form>
</div>
<?php endwhile; ?><?php else: ?>
    <p style="color:white;">You haven't applied to any jobs yet, Kindly do it ASAP! <a href="jobs.php" style="color:#f5a623;">Browse Jobs</a></p>
<?php endif; ?>
</div>
</body>
</html>