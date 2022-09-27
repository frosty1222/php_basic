### thực hiện bởi Lò Văn Đồng
### github link: https://github.com/frosty1222/php_basic
## Keyword 
### introduction to web technology
```Ngôn ngữ PHP là từ viết tắt của Personal Home Page (hiện nay là Hypertext Preprocessor). Thuật ngữ này chỉ chuỗi ngôn ngữ kịch bản hay mã lệnh, phù hợp để phát triển cho các ứng dụng nằm trên máy chủ.
Khi viết phần mềm bằng ngôn ngữ PHP, chuỗi lệnh sẽ được xử lý trên server để từ đó sinh ra mã HTML trên client.
```
### script mode 
+ để chạy file php  trong terminal ta phải set up tải ngĩn và php-fpm trước 
--> sau khi đã tải xong thì tạo một folder php-basic 
mở php-basic lên trong cửa sổ terminal 
+ để tạo một file php ta sử dụng cú pháp touch + tên file
+ để mở trong terminal ta sử dụng lệnh sudo nano + path ==> sau đó ta viết câu lệnh php để chạy 
==> những bước trên thực hiện sau khi đã cài và config ngĩn và php-fpm xong

### server mode 
==> nó là một server chạy trên web => web là có thể là qua chrome hoặc fire fox
==> php có thể chạy qua file html dùng cổng của file html để chạy và biên dịch câu lệnh php ra phía người dùng
==> hiện nay web server phổ biến nhất để chạy php là apache , apache cung cấp cho các dev cổng theo config của devs
### web stack
==> là tập hợp các phần mềm cần thiết để phát triển Web. Tối thiểu, ngăn xếp Web chứa hệ điều hành (OS), ngôn ngữ lập trình, phần mềm cơ sở dữ liệu và máy chủ Web.
==> LAMP là một Web stack thường được sử dụng. Nó sử dụng Linux làm hệ điều hành, Apache làm máy chủ Web, MySQL làm hệ quản trị cơ sở dữ liệu quan hệ và PHP làm ngôn ngữ kịch bản hướng đối tượng.

### what is nginx ?
==>Nginx là một trong những web server sử dụng mã nguồn mở vô cùng mạnh mẽ. Nó sử dụng các kiến trúc đơn luồng, hướng sự kiện nên mang lại nhiều hiệu quả hơn so với Apache server. Nginx có thể thực hiện được những việc quan trọng khác như: load balancing, HTTP caching hoặc sử dụng như một reverse proxy.

### php-fpm 
==>PHP-FPM viết tắt của FastCGI Process Manager là chương trình có chức năng phiên dịch PHP khi chạy trang web cho web server. PHP-FPM được hình thành dựa trên sự mở rộng của CGI và hiện đang được đông đảo người dùng lựa chọn
==>Về cơ bản, PHP-FPM có chức năng tối ưu quá trình xử lý thông tin của các máy chủ web, hỗ trợ việc xử lý thông tin từ nhiều trang web trong cùng một khoảng thời gian một cách nhanh nhất.
Với tốc độ xử lý PHP script nhanh cùng tính năng tối ưu hoá cho những trang web có kích thước lớn, giúp tăng lượng truy cập, PHP-FPM đang dần “soán ngôi” Apache + FastCGI quen thuộc.
# Html5 
**==> là một ngôn ngữ cấu trúc và trình bày nội dung cho World Wide Web. Đây là phiên bản thứ 5 của ngôn ngữ HTML, được giới thiệu bởi World Wide Web 
Consortium (W3C). HTML5 vẫn sẽ giữ lại những đặc điểm cơ bản của HTML4 và bổ sung thêm các đặc tả nổi trội của XHTML, DOM cấp 2, đặc biệt là JavaScript.**


# php data type
** php gồm nhừng kiểu dữ liệu sau **
+ String
+ Integer
+ Float (floating point numbers - also called double)
+ Boolean
+ Array
+ Object
+ NULL
+ Resource

### 1. string 
==> string có thể là một kí tự hoặc nhiều kí tự , string có thể là bất kể cái gì đặt trong dấy '' hoặc "";
vd 
```
<?php 
$stringA = 'hello world 2143242fgfgh@043534bbn.nb';
?>
```
### 2.array 
==> một mảng lưu trự nhiều dữ liệu trong một biến duy nhất
**vd:
```
<?php 
$cars = array("Volvo","BMW","Toyota");
?>
```
# PHP Variables, Constants and Array

### php variables 

+ trong php biến được khai báo với kí tự $ + tên biến

==>vd:
```
<?php 
$a =1;
$b =2
$ car ='honda'; 
?>
```
## Constants and array
### Constants
==>Hằng số là một định danh (tên) cho một giá trị đơn giản. Không thể thay đổi giá trị trong quá trình tập lệnh.
==>Tên hằng hợp lệ bắt đầu bằng một chữ cái hoặc dấu gạch dưới (không có dấu $ trước tên hằng)

==> vd:
```
<?php 
define("GREETING", "Welcome to W3Schools.com!");
  echo GREETING;

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
```
+ hằng là một biến toàn cục nên chúng ta có thể gọi đến hằng ở bất cứ khu vực nào trong chương trình 


# PHP Operators
==> Các toán tử được sử dụng để thực hiện các hoạt động trên các biến và giá trị.
==> các toán tử phổ biến và ví dụ 
```
<?php 
/*
1, +
$c =$a +$b
2, -
$c =$a-$b
3,*
$c =$a * $b
4, /
$c =$a / $b
5, % 
$c = $a % $b

6, ** 
$c = $a**$b

*/
?>
```

### php controls structures
==>gồm những cái cowq bản dưới đây 
  - if else statement         
    - else if statement         
    - switch case         
    - Loops            
    - while            
    - do while            
    - for            
    - foreach 
  
vd:

 1, if else
```
<?php
$a = 1;
$b = 2; 
if($a > $b){
  echo $a;
}else{
  echo $b;
}
?>
```
2. for
```
<?php
$arr = [1,2,3,4,5,6,7];
 for($i=0;$i<sizeof($arr);$i++){
    echo $arr[$i];
 }
?>
```

# String Functions 
==> string function trong php là một phần của core php nên khi ta muốn sử dụng thì không cần phải khai báo gì chỉ việc gọi đúng tên hàm là có thể dùng đươc

### ví dụ về một số  string function hay sử dụng 
```
+echo():hàm này để hiển thị một biến chuỗi chứa nhiều chuỗi kí tự hoặc 1 kí tự
+str_getcsv(): phân tích một chuỗi csv thành một mảng
+str_ireplace(): thay đổi một số kí tự trong chuỗi
+str_pad(): Đưa một chuỗi lên một độ dài mới
+str_repeat(): lặp một chuỗi với số lần cụ thể 
+str_replace(): thay đổi một số kí tự trong chuỗi (case-sensitive)
+str_shuffle(): Trộn ngẫu nhiên tất cả các ký tự trong một chuỗi
+str_split(): tách một chuỗi thành một mảng
+str_word_count(): đếm số lượng của kí tự trong chuỗi 
+strcasecmp(): so sánh 2 chuỗi 
+strchr(): Tìm lần xuất hiện đầu tiên của một chuỗi bên trong một chuỗi khác 
+strcmp(): so sánh 2 chuỗĩ
+strcoll(): so sánh chuỗi dựa trên ngôn ngữ
```
1. hàm echo 
==> hàm echo không hẳn là một hàm nó không thể truyền vào tham số mà chỉ để dùng để in chuỗi 

```
<?php
$a ="hello world";
echo $a // output 'hello world';

?>
```

2.str_replace
==> là hàm thay một chuỗi kí tự với một chuỗi cho trước 

```php 
<?php 
echo str_replace("world","Peter","Hello world!");
?>
```
3.str_getcsv()
```
<?php

$string = 'PHP,Java,Python,Kotlin,Swift';
$data = str_getcsv($string);

var_dump($data);
?>
```
4.str_ireplace()
```
<?php
echo str_ireplace("WORLD","Peter","Hello good world!");
// kết qủa là: hello good peter
?>
```
5.str_pad()
```
<?php
$str = "Hello World";
echo str_pad($str,20,".");
// kết quả là: Hello World.........
?>
```
6.str_repeat()
```
<?php
echo str_repeat("Wow",13);
?> 
// kết quả:WowWowWowWowWowWowWowWowWowWowWowWowWow
```
7.str_shuffle()
```
<?php
echo str_shuffle("Hello World");
?>
// kết quả:oldlre loWH
```
8.str_split()
```
<?php
print_r(str_split("Hello"));
?>
// kết quả:Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )
```
9.str_word_count()
```
<?php
echo str_word_count("Hello world!");
?>
// kết quả: 2
```
10.strcasecmp()
```
<?php
echo strcasecmp("Hello world!","HELLO WORLD!");
?>
// kết quả:0
// nếu hiển thị kết quả là o thì có nghĩa là 2 cái chuỗi trên bằng nhau
```

11.strchr()
```
<?php
echo strchr("Hello world!","world");
?>
// kết quả:world!
```
12.strcmp()
```
<?php
echo strcmp("Hello world!","Hello world!");
?>
// kết quả:0
// nếu kết quả là 0 thì 2 chuỗi trên bằng nhau

```
13.strcoll()
```
setlocale (LC_COLLATE, 'NL');
echo strcoll("Hello World!","Hello World!");
echo "<br>";

setlocale (LC_COLLATE, 'en_US');
echo strcoll("Hello World!","Hello World!");
?>
// kết quả: 0
// nếu kết quả là 0 thì 2 chuỗi trên bằng nhau
```
### Array Functions 
==>Array functions :tạo và trả về một mảng. Nó cho phép bạn tạo các mảng được lập chỉ mục, liên kết và đa chiều.
### một sồ php array function 
1.hàm count trong php
```
+ array(): tạo một mảng
+ count():hàm này để đếm một array
+ sort(): hàm này để đếm 
+ array_change_key_case(): thay đổi kí tự trong mảng thành lowercase(viết thường) hoặc uppercase(hoa)
+ array_chunk(): Tách một mảng thành nhiều mảng
+ array_column(): trả về một giá trị từ một cột dữ liệu đầu vào 
+ array_combine():Tạo một mảng bằng cách sử dụng các phần tử từ một mảng "khóa" và một mảng "giá trị"
+ array_count_values(): đếm số lượng giá trị trong một mảng
+ array_diff(): so sánh giá trị và trả về giá trị khác biệt
+ array_diff_assoc(): so sánh keys và values của mảng và trả về giá trị khác biệt
+ array_diff_key() : so sánh khoá của trị trị trong mảng và trả về giá trị khác biệt
+ array_diff_uassoc(): So sánh các mảng và trả về sự khác biệt (so sánh các khóa và giá trị, sử dụng chức năng so sánh khóa do người dùng xác định)
+ array_diff_ukey(): So sánh các mảng và trả về sự khác biệt (chỉ so sánh các khóa, sử dụng chức năng so sánh khóa do người dùng xác định)
+ array_fill():lấp đầy một mảng với giá trị tương ứng 
+ array_fill_keys():Điền vào một mảng với các giá trị, chỉ định các khóa
+hàm array_search():hàm này sẽ trả về giá trị được tìm kiếm nếu tìm kiếm được trong mảng
1,count

<?php 
$season=array("summer","winter","spring","autumn");    
echo count($season);    
?>
```
2.hàm sort
==> hàm này để  sắp xếp các kí tự trong một array theo quy tắc từ a->z
```
<?php    
$season=array("summer","winter","spring","autumn");    
sort($season);  
foreach( $season as $s )    
{    
  echo "$s<br />";    
}    
?> 
```
3.hàm array_search()
==> hàm này sẽ trả về giá trị được tìm kiếm nếu tìm kiếm được trong mảng
```
<?php    
$season=array("summer","winter","spring","autumn");    
$key=array_search("spring",$season);  
echo $key; // echo  spring   
?> 
```
4.array_change_key_case():
```
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
?>
// kết quả:Array ( [PETER] => 35 [BEN] => 37 [JOE] => 43 )
```
5.array_chunk()
```
<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
?>
// kết quả:Array ( [0] => Array ( [0] => Volvo [1] => BMW ) [1] => Array ( [0] => Toyota [1] => Honda ) [2] => Array ( [0] => Mercedes [1] => Opel ) )
```
6.array_column()
```
<?php
// An array that represents a possible record set returned from a database
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>
// kết quả: 
Array
(
  [0] => Griffin
  [1] => Smith
  [2] => Doe
)
```

7.array_combine()
```
<?php
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
?>
// kết quả:Array ( [Peter] => 35 [Ben] => 37 [Joe] => 43 )

```
8.array_count_values()
```
<?php
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
?>
// kết quả:Array ( [A] => 2 [Cat] => 1 [Dog] => 2 )
```

9.array_diff()
```
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
?>
// kết quả: Array ( [d] => yellow )
```
10.array_diff_assoc()
```
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);
?>
// kết quả: Array ( [d] => yellow )
```
11.array_diff_key()
```
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
?>
// kết quả:Array ( [b] => green )
```
12.array_diff_uassoc()
```
<?php
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);
?>
// kết quả:Array ( [a] => red [c] => blue )
```
13.array_diff_ukey()
```
<?php
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_diff_ukey($a1,$a2,"myfunction");
print_r($result);
?>
// kết quả:Array ( [c] => blue )
```
14.array_fill()
```
<?php
$a1=array_fill(3,4,"blue");
print_r($a1);
?>
//kết quả:
Array ( [3] => blue [4] => blue [5] => blue [6] => blue )

Array ( [0] => red )
```
15.array_fill_keys()
```
<?php
$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");
print_r($a1);
?>
// kết quả:Array ( [a] => blue [b] => blue [c] => blue [d] => blue )
```
