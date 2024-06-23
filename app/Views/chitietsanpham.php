<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=0.33">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Thế giới điện thoại</title>
  <link rel="shortcut icon" href="./img/favicon.ico" />

  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <!-- owl carousel libraries cho hình nhỏ -->
  <link rel="stylesheet" href="./js/owlcarousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="./js/owlcarousel/owl.theme.default.min.css" />
  <script src="./js/Jquery/Jquery.min.js"></script>
  <script src="./js/owlcarousel/owl.carousel.min.js"></script>

  <!-- our files -->
  <!-- css -->
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/topnav.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/taikhoan.css" />
  <link rel="stylesheet" href="./css/trangchu.css" />
  <link rel="stylesheet" href="./css/home_products.css" />
  <link rel="stylesheet" href="./css/chitietsanpham.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <!-- js -->
  <script src="./data/products.js"></script>
  <script src="./js/classes.js"></script>
  <script src="./js/dungchung.js"></script>
  <script src="./js/chitietsanpham.js"></script>
</head>

<body>
  <script>
    addTopNav();
  </script>

  <section>
    <script>
      addHeader();
      addTaskBar()
    </script>

    <div id="productNotFound" style="
          min-height: 50vh;
          text-align: center;
          margin: 50px;
          display: none;
        ">
      <h1 style="color: red; margin-bottom: 10px">Không tìm thấy sản phẩm</h1>
      <a href="index.php" style="text-decoration: underline">Quay lại trang chủ</a>
    </div>

    <div class="chitietSanpham" style="margin-bottom: 100px">
      <h1> </h1>
      <div class="rating"></div>
      <div class="rowdetail group">
        <div class="picture">
          <img src="" onclick="opencertain()" />
        </div>
        <div class="price_sale">
          <div class="area_price"></div>
          <div class="ship" style="display: none">
            <img src="./img/chitietsanpham/clock-152067_960_720.png" />
            <div>NHẬN HÀNG TRONG 1 GIỜ</div>
          </div>
          <div class="area_promo">
            <strong>khuyến mãi</strong>
            <div class="promo">
              <img src="./img/chitietsanpham/icon-tick.png" />
              <div id="detailPromo"></div>
            </div>
          </div>
          <div class="policy">
            <div>
              <img src="./img/chitietsanpham/box.png" />
              <p>
                Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp
                lưng
              </p>
            </div>
            <div>
              <img src="./img/chitietsanpham/icon-baohanh.png" />
              <p>Bảo hành chính hãng 12 tháng.</p>
            </div>
            <div class="last">
              <img src="./img/chitietsanpham/1-1.jpg" />
              <p>
                1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1
                ngày.
              </p>
            </div>
          </div>
          <div class="area_order">
            <!-- nameProduct là biến toàn cục được khởi tạo giá trị trong phanTich_URL_chiTietSanPham -->
            <a class="buy_now" onclick="themVaoGioHang(maProduct, nameProduct, selectedColor,selectedRom);">
              <b><i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng</b>
              <p>Giao trong 1 giờ hoặc nhận tại cửa hàng</p>
            </a>
          </div>
        </div>
        <div class="choosecolor" id="row1">
        </div>
        <div class="choose-rom" id="row2"></div>
        <script>



        </script>
        <div class="info_product">
          <h2>Thông số kỹ thuật</h2>
          <ul class="info"></ul>
        </div>
      </div>
      <div id="overlaycertainimg" class="overlaycertainimg">
        <div class="close" onclick="closecertain()">&times;</div>
        <div class="overlaycertainimg-content" style="margin-top: 100px;">
          <img id="bigimg" class="bigimg" src="./img/chitietsanpham/oppo-f9-red-2-400x460.png" />
          <div class="div_smallimg owl-carousel" style="margin-left: -400px;">
          </div>
        </div>
      </div>
    </div>

    <div id="goiYSanPham"></div>
  </section>

  <script>
    addContainTaiKhoan();
  </script>
  <hr style="margin-bottom:20px;">
  <div class="head1">
    <h1>Đánh giá và bình luận sản phẩm</h1>
    <div class="rating">
      <span class="star" data-rating="1">&#9733;</span>
      <span class="star" data-rating="2">&#9733;</span>
      <span class="star" data-rating="3">&#9733;</span>
      <span class="star" data-rating="4">&#9733;</span>
      <span class="star" data-rating="5">&#9733;</span>
    </div>
    <p id="result">Chưa có đánh giá</p>
    <div class="binhluan">
      <form id="myForm" action="" style="margin-bottom: 40px;">
        <textarea id="comment-input" placeholder="Nhập bình luận của bạn" style="font-size: larger;"></textarea>
        <div>
          <p>
            <span>Gửi ảnh</span>
            <span> Quy định đăng bình luận </span>
          </p>
          <input type="submit" value="Gửi" id="submitButton" />
        </div>
      </form>

      <div class="comment">
        <div class="hoi">
          <p class="bold">Phan Thị Thành Danh</p>
          <p>
            Cửa hàng ơi cho em hỏi 14ProMax 512GB màu trắng khi nào về hàng ở
            Vĩnh Cửu Đồng Nai ạ?
          </p>
          <p>
            <span> Trả lời </span>
            <span> - 15 giờ trước </span>
          </p>
        </div>
        <div class="traloi">
          <p> Mobile Store <span style="color: red;">QTV</span>
          </p>
          <p>Chào chị,</p>
          <p>
            Dạ xin lỗi chị hiệu tại em chưa có thông tin cụa thể mong chị
            thông cảm ạ
          </p>
          <p>Thông tin đến chị</p>
          <p>
            <span>Trả lời</span>
            <span> Hài lòng </span>
            <span> Không hài lòng </span>
            <span>- 6 giờ trước</span>
          </p>
        </div>
        <div class="hoi">
          <p class="bold">Lò Tùng Dương</p>
          <p>
            Thật tuyệt vời với kiểu dáng sang trọng nhìn hút mắt
          </p>
          <p>
            <span> Trả lời </span>
            <span> - 15 giờ trước </span>
          </p>
        </div>
        <div class="traloi">
          <p> Mobile Store <span style="color: red;">QTV</span>
          </p>
          <p>Chào anh,</p>
          <p>
            Dạ cảm ơn lời đánh giá của anh ạ
          </p>

          <p>
            <span>Trả lời</span>
            <span> Hài lòng </span>
            <span> Không hài lòng </span>
            <span>- 6 giờ trước</span>
          </p>
        </div>
        <div class="hoi">
          <p class="bold">Nguyễn Quang Linh</p>
          <p>
            Cửa hàng ơi cho em hỏi 14ProMax 512GB màu trắng khi nào về hàng ở
            Vĩnh Cửu Đồng Nai ạ?
          </p>
          <p>
            <span> Trả lời </span>
            <span> - 15 giờ trước </span>
          </p>
        </div>
        <div class="traloi">
          <p> Mobile Store <span style="color: red;">QTV</span>
          </p>
          <p>Chào chị,</p>
          <p>
            Dạ xin lỗi chị hiệu tại em chưa có thông tin cụa thể mong chị
            thông cảm ạ
          </p>
          <p>Thông tin đến chị</p>
          <p>
            <span>Trả lời</span>
            <span> Hài lòng </span>
            <span> Không hài lòng </span>
            <span>- 6 giờ trước</span>
          </p>
        </div>
        <div class="hoi">
          <p class="bold">Nguyễn Mạnh Cường</p>
          <p>
            Cửa hàng ơi cho em hỏi 14ProMax 512GB màu trắng khi nào về hàng ở
            Vĩnh Cửu Đồng Nai ạ?
          </p>
          <p>
            <span> Trả lời </span>
            <span> - 15 giờ trước </span>
          </p>
        </div>
        <div class="traloi">
          <p> Mobile Store <span style="color: red;">QTV</span>
          </p>
          <p>Chào chị,</p>
          <p>
            Dạ xin lỗi chị hiệu tại em chưa có thông tin cụa thể mong chị
            thông cảm ạ
          </p>
          <p>Thông tin đến chị</p>
          <p>
            <span>Trả lời</span>
            <span> Hài lòng </span>
            <span> Không hài lòng </span>
            <span>- 6 giờ trước</span>
          </p>
        </div>
      </div>
    </div>
    <script>
      const stars = document.querySelectorAll(".star");
      const result = document.getElementById("result");
      const myForm = document.getElementById("myForm");
      const commentInput = document.getElementById("comment-input");
      const commentSection = document.querySelector(".comment");

      myForm.addEventListener("submit", function (event) {
        event.preventDefault();

        // Lấy nội dung bình luận từ người dùng
        const commentText = commentInput.value;

        if (commentText.trim() === "") {
          alert("Vui lòng nhập nội dung bình luận.");
          return;
        }

        // Tạo một phần tử bình luận mới
        const newComment = document.createElement("div");
        newComment.classList.add("comment");
        newComment.innerHTML = `
            <p class="bold">Minh Phương</p>
            <p>${commentText}</p>
            <p>
              <span> Trả lời </span>
              <span> - Just now </span>
            </p>
          `;

        // Thêm bình luận mới vào phần bình luận, sau đó chèn lên đầu
        if (commentSection.children.length > 0) {
          commentSection.insertBefore(newComment, commentSection.children[0]);
        } else {
          commentSection.appendChild(newComment);
        }

        // Xóa nội dung khỏi hộp nhập bình luận
        commentInput.value = "";

        // Hiển thị thông báo
        alert("Cảm ơn bạn đã đánh giá sản phẩm của chúng tôi.");
      });

      stars.forEach((star) => {
        star.addEventListener("click", () => {
          const rating = parseInt(star.getAttribute("data-rating"));
          result.textContent = `Bạn đã đánh giá sản phẩm ${rating} sao.`;

          stars.forEach((s, index) => {
            if (index < rating) {
              s.classList.add("active");
            } else {
              s.classList.remove("active");
            }
          });
        });
      });
    </script>



  </div>
  <div class="footer">
    <script>
      addFooter();
    </script>
  </div>
</body>

</html>