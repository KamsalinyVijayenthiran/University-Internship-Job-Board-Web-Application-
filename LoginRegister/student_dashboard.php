<?php
    session_start();
    // 1. Security check: Ensure user is logged in
    if(!isset($_SESSION['email'])) {
        header("Location: LoginRegister.php");
        exit();
    }

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

    // 2. Gravatar Logic: Auto-fetch profile image based on email
    $email_trimmed = trim(strtolower($email));
    $email_hash = md5($email_trimmed);
    $gravatar_url = "https://www.gravatar.com/avatar/" . $email_hash . "?s=150&d=mp";

    // 3. Navigation Logic
    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard | CampusHire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="student_dashboard.css">
</head>

<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-logo">
                <h2>Campus<span>Hire</span></h2>
            </div>
            
            <div class="user-profile">
                <img src="<?php echo $gravatar_url; ?>" alt="Profile" class="profile-img">
                <div class="user-info">
                    <p class="welcome-text">Welcome,</p>
                    <h4 class="user-name"><?= $name; ?>!</h4>
                </div>
            </div>

            <nav class="sidebar-nav">
                <ul>
                    <li class="<?= ($page == 'dashboard') ? 'active' : ''; ?>">
                        <a href="student_dashboard.php?page=dashboard"><i class="fas fa-th-large"></i> Dashboard</a>
                    </li>
                    <li class="<?= ($page == 'job_search') ? 'active' : ''; ?>">
                        <a href="student_dashboard.php?page=job_search"><i class="fas fa-search"></i> Job Search</a>
                    </li>
                    <li class="<?= ($page == 'applications') ? 'active' : ''; ?>">
                        <a href="student_dashboard.php?page=applications"><i class="fas fa-paper-plane"></i> My Applications</a>
                    </li>
                    <li class="<?= ($page == 'profile') ? 'active' : ''; ?>">
                        <a href="student_dashboard.php?page=profile"><i class="fas fa-user"></i> Profile</a>
                    </li>
                    <li><a href="Logout.php" class="logout-link"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            
            <?php if ($page == 'job_search'): ?>
                <div class="section-header"><h2>Job Discovery</h2></div>
                <div class="search-container">
                    <form action="" method="GET" class="search-form">
                        <input type="hidden" name="page" value="job_search">
                        <input type="text" name="q" placeholder="Search by Job Title, Skills or Company...">
                        <button type="submit" class="search-btn">Search</button>
                    </form>
                </div>
                <div class="job-list">
                    <div class="job-card-item">
                        <div class="job-details">
                            <h3>Web Developer Intern</h3>
                            <p>Tech Solutions • Colombo</p>
                        </div>
                        <button class="action-btn">View Details</button>
                    </div>
                </div>

            <?php elseif ($page == 'applications'): ?>
                <div class="section-header"><h2>My Applications</h2></div>
                <section class="table-section">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Company</th>
                                <th>Applied Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Web Intern</td>
                                <td>TechSolutions</td>
                                <td>Feb 20, 2026</td>
                                <td><span class="status-dot pending"></span> Pending</td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            <?php elseif ($page == 'profile'): ?>
                <div class="section-header"><h2>My Profile</h2></div>
                <div class="profile-card">
                    <img src="<?php echo $gravatar_url; ?>" alt="Profile" class="profile-large">
                    <div class="profile-details">
                        <p><strong>Name:</strong> <?= $name; ?></p>
                        <p><strong>Email:</strong> <?= $email; ?></p>
                        <p><strong>Account Type:</strong> Student</p>
                        <button class="action-btn">Edit Profile Information</button>
                    </div>
                </div>

            <?php else: ?>
                <div class="stats-grid">
                    <div class="stat-card blue"><p>Applied</p><h3>12</h3></div>
                    <div class="stat-card green"><p>Interviews</p><h3>2</h3></div>
                    <div class="stat-card orange"><p>Active Jobs</p><h3>45</h3></div>
                </div>
                <section class="table-section">
                    <h3>Recent Activity</h3>
                    <table class="styled-table">
                        <thead>
                            <tr><th>Job Title</th><th>Company</th><th>Applied Date</th><th>Status</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>PHP Developer</td><td>Global IT</td><td>Feb 20, 2026</td><td>Pending</td></tr>
                        </tbody>
                    </table>
                </section>
            <?php endif; ?>
            
        </main>
    </div>
</body>
</html>