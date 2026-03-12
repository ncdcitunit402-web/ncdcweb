<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  exit;
}
include("../config/db.php");
include_once __DIR__.'/includes/header.php';

$result = mysqli_query($conn, "SELECT * FROM feedback ORDER BY created_at DESC");
?>

<style>
/* ===== GENERAL ===== */
.page-title {
    margin: 20px 0;
    color: #003366;
}

/* ===== DESKTOP TABLE ===== */
.table-wrapper {
    overflow-x: auto;
}

.feedback-table {
    width: 100%;
    border-collapse: collapse;
}

.feedback-table th,
.feedback-table td {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
}

.feedback-table th {
    background: #003366;
    color: #fff;
}

/* ===== MOBILE CARDS ===== */
.mobile-cards {
    display: none;
}

.feedback-card {
    border: 1px solid #ccc;
    background: #fff;
    padding: 12px;
    margin-bottom: 12px;
    border-radius: 6px;
}

.feedback-card p {
    margin: 4px 0;
    font-size: 14px;
}

.feedback-card strong {
    color: #003366;
}

/* BACK BUTTON */
.back-btn{
  display:inline-flex;
  align-items:center;
  gap:6px;
  margin-bottom:18px;
  padding:8px 14px;
  background:linear-gradient(135deg,#444,#222);
  color:#fff;
  text-decoration:none;
  border-radius:8px;
  font-size:14px;
  font-weight:600;
  transition:.3s;
}
.back-btn:hover{
  background:linear-gradient(135deg,#0b5ed7,#0d6efd);
  transform:translateX(-3px);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .table-wrapper {
        display: none;
    }

    .mobile-cards {
        display: block;
    }
    .back-btn{
    width:100%;
    justify-content:center;
  }
}
</style>
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>
<h2 class="page-title">Feedback Received</h2>

<!-- ===== DESKTOP VIEW ===== -->
<div class="table-wrapper">
    <table class="feedback-table">
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Feedback</th>
            <th>Reply Expected</th>
            <th>Date</th>
        </tr>

        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= htmlspecialchars($row['name']); ?></td>
            <td><?= htmlspecialchars($row['mobile']); ?></td>
            <td><?= htmlspecialchars($row['email']); ?></td>
            <td><?= nl2br(htmlspecialchars($row['description'])); ?></td>
            <td><?= $row['reply_expected']; ?></td>
            <td><?= date("d-m-Y", strtotime($row['created_at'])); ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<!-- ===== MOBILE VIEW ===== -->
<div class="mobile-cards">
<?php
mysqli_data_seek($result, 0);
$i = 1;
while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="feedback-card">
        <p><strong>S.No:</strong> <?= $i++; ?></p>
        <p><strong>Name:</strong> <?= htmlspecialchars($row['name']); ?></p>
        <p><strong>Mobile:</strong> <?= htmlspecialchars($row['mobile']); ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($row['email']); ?></p>
        <p><strong>Feedback:</strong><br><?= nl2br(htmlspecialchars($row['description'])); ?></p>
        <p><strong>Reply Expected:</strong> <?= $row['reply_expected']; ?></p>
        <p><strong>Date:</strong> <?= date("d-m-Y", strtotime($row['created_at'])); ?></p>
    </div>
<?php } ?>
</div>

<?php include_once __DIR__.'/includes/footer.php'; ?>
