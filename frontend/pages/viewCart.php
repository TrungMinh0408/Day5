<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: /Day5/frontend/pages/login.php');
    exit;
}

$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giỏ hàng</title>
  <?php include_once(__DIR__ . '/../layouts/styles.php'); ?>
</head>
<body class="d-flex flex-column min-vh-100">
<?php include_once(__DIR__ . '/../layouts/partials/header.php'); ?>

<main class="container flex-grow-1" style="margin-top: 120px;">
  <h2 class="mb-4">Giỏ hàng của bạn</h2>

  <?php if (empty($cart)): ?>
    <div class="alert alert-info">Giỏ hàng đang trống.</div>
  <?php else: ?>
    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>Ảnh</th>
          <th>Tên sản phẩm</th>
          <th>Loại</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Tổng</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $total = 0;
        foreach ($cart as $item): 
          $subtotal = $item['price'] * $item['quantity'];
          $total += $subtotal;
        ?>
        <tr>
          <td><img src="/Day5/assets/<?= htmlspecialchars($item['image']) ?>" style="width: 80px;"></td>
          <td><?= htmlspecialchars($item['name']) ?></td>
          <td><?= htmlspecialchars($item['category']) ?></td>
          <td><?= number_format($item['price'], 0) ?>₫</td>
          <td><?= $item['quantity'] ?></td>
          <td><?= number_format($subtotal, 0) ?>₫</td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="5" class="text-end">Tổng cộng:</th>
          <th><?= number_format($total, 0) ?>₫</th>
        </tr>
      </tfoot>
    </table>
  <?php endif; ?>
</main>

<?php include_once(__DIR__ . '/../layouts/partials/footer.php'); ?>
<?php include_once(__DIR__ . '/../layouts/scripts.php'); ?>
</body>
</html>
