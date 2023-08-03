<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="detail.js" type="text/javascript" async></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="mt-16 w-full  mx-[20px]">
        <img src="./upload/product_dentail.jpg" alt="">
    </div>
    <!-- chi tiết sản phẩm  -->
    <div class="mx-5 mt-10">

        <?php
        require_once "./conect/conect.php";
        if (isset($_GET['id']));
        $id = $_GET['id'];
        $sql = "SELECT * FROM `sanpham` WHERE id = '$id'";
        $sqlluotxem = "UPDATE sanpham SET luotxem = luotxem + 1 WHERE id = $id";
        mysqli_query($ketnoi, $sqlluotxem);
        $datasql = mysqli_query($ketnoi, $sql);
        while ($data = mysqli_fetch_assoc($datasql)) {
        ?>


            <div class="grid grid-cols-2 gap-5 ">
                <!-- phan anh san pham -->
                <div class="">
                    <!-- chỗ dữ liệu ảnh từng sản phẩm khi ấn xem chi tiết sản phẩm -->
                    <div class="relative border-solid border-[1px] border-gray-300 p-5  "><img src="./upload/<?php echo $data['anhsanpham'] ?>" alt="Ảnh sản phẩm" class="w-100% transition-transform duration-500 transform" id="product-image">
                    </div>
                </div>


                <!-- phần tên , giá , mô tả, kichs cỡ , chọn size và add đặt hàng  -->
                <div class="">
                    <div class="product_price my-3">
                        <form action="" method="post">
                            <!-- ten san pham -->
                            <input class="bg-white font-semibold text-3xl" type="text" name="" id="" disabled value="<?php echo $data['tensanpham'] ?>">
                            <!-- gia san pham -->
                            <span class="flex my-6">
                                <input class="text-[#FF324D] font-semibold text-2xl max-w-[110px] bg-white " disabled type="text" name="" id="" value="<?php echo $data['giagoc'] ?>đ ">
                                <del class="text-gray-500 font-mono mx-2"><?php echo $data['giasale'] ?>đ</del>
                                <!-- <input class="text-gray-500 font-mono mx-2  max-w-[70px] bg-white" type="text" disabled
                                    name="" id="" value="$55.25"> -->
                                <input class="text-[#388E3C] font-mono  max-w-[80px] bg-white" type="text" disabled name="" id="" value="35% Off">
                                <span class="ml-20"><i class="fa-solid fa-star" style="color: #f5db38;"></i>
                                    <i class="fa-solid fa-star" style="color: #f5db38;"></i>
                                    <i class="fa-solid fa-star" style="color: #f5db38;"></i>
                                    <i class="fa-regular fa-star" style="color: #f5db38;"></i>
                                </span>
                            </span>
                            <!-- mo ta san pham -->
                            <div class="my-2">
                                <p class="text-[#687188] font-normal text-xl"><?php echo $data['mota'] ?></p>
                            </div>
                            <!-- cam ket -->
                            <div class="text-2xl my-6">
                                <ul>
                                    <li class="font-semibold "><i class="fa-solid fa-user-shield" style="color: #eb0017;"></i>
                                        1 Year AL
                                        Jazeera Brand Warranty</li>
                                    <li class="font-semibold "><i class="fa-brands fa-instalod" style="color: #eb0017;;"></i>
                                        30 Day
                                        Return Policy
                                    </li>
                                    <li class="font-semibold "><i class="fa-solid fa-sack-dollar" style="color: #eb0017;;"></i> Cash on Delivery
                                        available</li>
                                </ul>
                            </div>

                            <!--LUA CHON COLOR -->
                            <div class="my-4 text-2xl">
                                <span class="font-semibold text-gray-700 text-xl mr-2">Color :</span>
                                <?php
                                $color = $data['color'];
                                switch ($color) {
                                    case 'Đỏ':
                                ?>
                                        <!-- input lấy thông tin sp màu đỏ để gửi dữ liệu để đặt hàng them id hoạc name sau -->
                                        <input type="text" hidden value="Đỏ">
                                        <!-- input lấy thông tin sp màu đỏ để gửi dữ liệu để đặt hàng -->
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #f7021b;"></i></span>
                                    <?php
                                        break;

                                    case 'Đen':
                                    ?>
                                        <!-- input lấy thông tin sp màu đen để gửi dữ liệu để đặt hàng them id hoạc name sau -->
                                        <input type="text" hidden value="Đen">
                                        <!-- input lấy thông tin sp màu đen để gửi dữ liệu để đặt hàng -->
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #000000;"></i></span>
                                    <?php
                                        break;
                                    case 'Xanh dương':
                                    ?>
                                        <input type="text" hidden value="Xanh Dương">
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #12aff3;"></i></span>
                                    <?php
                                        break;
                                    case 'Vàng':
                                    ?>
                                        <input type="text" hidden value="Vàng">
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #fafe06;"></i></span>
                                    <?php
                                        break;
                                    case 'Trắng':
                                    ?>
                                        <input type="text" hidden value="Trắng">
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #dcdfe4;"></i></span>
                                    <?php
                                        break;
                                    case 'Tím':
                                    ?>
                                        <input type="text" hidden value="Tím">
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #e30fff;"></i></span>
                                    <?php
                                        break;
                                    case 'Cam':
                                    ?>
                                        <input type="text" hidden value="Cam">
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #ff9b0f;"></i></span>
                                    <?php
                                        break;
                                    case 'Hồng':
                                    ?>
                                        <input type="text" hidden value="Hồng">
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #f613ba;"></i></span>
                                    <?php
                                        break;
                                    default:
                                    ?>
                                        <input type="text" hidden value="Xanh Lá">
                                        <span><i class="fa-solid fa-droplet fa-beat" style="color: #06fe38;"></i></span>
                                <?php
                                        break;
                                }
                                ?>
                            </div>
                            <!-- LUA CHON SIZE -->
                            <div class="text-2xl"> <span class="font-semibold text-gray-700 text-xl mr-5">Size: </span>
                                <span><input class="bg-white font-bold" type="text" disabled name="" id="" value="<?php echo $data['size'] ?>"></span>
                            </div>
                            <br>
                            <hr>
                            <!--THEM SO LUONG -->
                            <div class="my-5">
                                <button class="bg-gray-100 rounded-[50%] w-8 p-1 font-black text-l" onclick="decrement()"><i class="fa-solid fa-caret-down" style="color: #f8303a;"></i></button>
                                <span class="border-solid border-[1px] border-gray-300 rounded-sm px-5 p-2" id="number-display">1</span>
                                <button class="bg-gray-100 rounded-[50%] w-8 p-1 font-black text-l" onclick="increment()"><i class="fa-solid fa-caret-up" style="color: #f8303a;"></i></button>

                                <!-- Add to cart       -->
                                <input class=" text-xl bg-[#ff324d] px-12 py-5 ml-2 rounded-md text-white hover:bg-white hover:text-[#ff324d] border-solid border-[#ff324d] border-[1px]" type="submit" value="Add to cart">

                                <span><i class="text-2xl fa-solid fa-recycle mx-2" style="color: gray;"></i></span>
                                <span><i class="text-2xl fa-solid fa-heart mx-2" style="color: #f8303a;"></i></span>

                            </div>

                        </form>

                    </div>

                    <hr>
                    <ul class="my-4 text-2xl mt-16">
                        <li>SKU: <a href="#">BE45VGRT</a></li>
                        <li>Category: <a href="#">Clothing</a></li>
                        <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">printed</a> </li>
                    </ul>

                    <span class="flex text-2xl mt-20">
                        <h1 class="text-[#687188] font-normal ">Share:</h1>
                        <h1 class="ml-6">
                            <i class="fa-brands fa-facebook-f" style="color: #85888e;"></i>
                            <i class=" ml-16 fa-brands fa-youtube" style="color: #85888e;"></i>
                            <i class=" ml-16 fa-solid fa-location-dot" style="color: #85888e;"></i>
                            <i class=" ml-16 fa-brands fa-google" style="color: #85888e;"></i>
                        </h1>
                    </span>

                </div>
            </div>
        <?php
        }
        ?>
        <!-- binh luan  -->
        <div class="my-6">
            <h1 class="mt-20 text-[#f8303a] font-semibold">Comment:</h1>
            <div class=" border-gray-400 rounded-md border-[1px] h-28 border-solid">
                <h1>dcm huu thuc</h1>
            </div>
        </div>

        <!-- San pham cung danh muc -->
        <h1 class="font-semibold text-3xl">Releted Products</h1>
        <div class="grid grid-cols-5 gap-4">
            <?php
            $sql = "SELECT * FROM `danhmuc`";
            $datasql = mysqli_query($ketnoi, $sql);
            $data = mysqli_fetch_assoc($datasql);
            $tendm = $data['tendanhmuc'];
            $sqlcdm = "SELECT p.id, p.tensanpham ,p.giagoc,p.giasale, p.anhsanpham,c.tendanhmuc FROM sanpham as p left join danhmuc as c on p.iddanhmuc=c.id where tendanhmuc = '$tendm'";
            $datasql = mysqli_query($ketnoi, $sqlcdm);
            while ($data = mysqli_fetch_assoc($datasql)) {
            ?>


                <div class="border-[1px] border-solid border-gray-200 rounded-sm">
                    <img class="" src="./upload/<?php echo $data['anhsanpham'] ?>" alt="">
                    <h4 class="font-semibold text-lg"><a href="#"><?php echo $data['tensanpham'] ?></a></h4>
                    <div class="product_price my-3">
                        <span class="text-[#FF324D] font-semibold text-lg"><?php echo $data['giasale'] ?>đ</span>
                        <del class="text-gray-500 font-mono mx-2"><del><?php echo $data['giagoc'] ?>đ</del>
                            <span class="text-[#388E3C] font-mono">35% Off</span>
                            <br>
                            <i class="fa-solid fa-star" style="color: #f5db38;"></i>
                            <i class="fa-solid fa-star" style="color: #f5db38;"></i>
                            <i class="fa-solid fa-star" style="color: #f5db38;"></i>
                            <i class="fa-regular fa-star" style="color: #f5db38;"></i>
                            <!-- <span class="rating_num">(21)</span> XEEPS HANG -->
                    </div>
                </div>


            <?php
            }
            ?>
        </div>
    </div>


    <script>
        var image = document.getElementById('product-image');

        image.addEventListener('mouseenter', function() {
            image.classList.add('scale-110');
        });

        image.addEventListener('mouseleave', function() {
            image.classList.remove('scale-110');
        });


        var number = 0; // Initial number

        function increment() {
            number += 1; // Increment the number by 1
            updateNumber();
        }

        function decrement() {
            if (number > 1) {
                number -= 1; // Decrement the number by 1, if it's greater than 0
                updateNumber();
            }
        }

        function updateNumber() {
            document.getElementById('number-display').textContent = number; // Update the number display
        }
    </script>
</body>

</html>
<!-- <span>
                                <input id="radio-1" name="radio" type="radio" checked>
                                <label for="radio-1" class="radio-label"><i class="fa-solid fa-s"
                                        style="color: #6f7680;"></i></label>
                            </span>
                            <span class="mx-3">
                                <input id="radio-1" name="radio" type="radio" checked>
                                <label for="radio-1" class="radio-label"><i class="fa-solid fa-m"
                                        style="color:#4c4c10;"></i></label>
                            </span>
                            <span>
                                <input id="radio-1" name="radio" type="radio" checked>
                                <label for="radio-1" class="radio-label"><i class="fa-solid fa-l"
                                        style="color: black;"></i></label>
                            </span> -->