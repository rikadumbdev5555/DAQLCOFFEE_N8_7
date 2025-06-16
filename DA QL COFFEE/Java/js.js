function ktdangky()
{
	var ck = document.getElementById("idnam");
    var tt = document.getElementById("idnu");
	var tenkt = document.forms["dangky"]["ten"].value;
	if(tenkt =="")
	{
		alert("Tên không đuợc trống !");
		return false;
		}
	var diachikt = document.forms["dangky"]["diachi"].value;
	if(diachikt=="")
	{
		alert("Địa chỉ không đuợc trống !");
		return false;
		}
    if ((ck.checked == false) && (tt.checked == false)) {
        alert("Hãy xác định giới tính");
        return false;
        }
	var trinhdohoc = document.forms["dangky"]["trinhdo"].value;
	if(trinhdohoc =="")
	{
		alert("Trình độ không đuợc trống !");
		return false;
		}
	var sodienthoai = document.forms["dangky"]["sdt"].value;
	if(sodienthoai =="")
	{
		alert("Số điện thoại không đuợc trống !");
		return false;
		}
}
function kiemtra(){
	var ten = document.forms["dangnhap"]["txtten"].value;
	var pass = document.forms["dangnhap"]["txtpass"].value;
	var a = 111;
	var b = 111;
	if(ten =="" && pass==""||ten !="" && pass==""||ten =="" && pass!="")
	{
		alert ("Tài Khoản Hoặc Mật Khẩu Không Đuợc Tróng !");
		return false;
		}
	if(ten != a && pass != b || ten != a && pass == b || ten == a && pass != b)
	{
		alert("Tài khoản hoặc mật khẩu sai !");
		return false;
		}
	}
function ktnam(a,b)
{
	document.write("<select>");
	for(i=b;i>a;i--)
    {
	document.write("<option value='"+i+"'>"+i+"</option>");
	}
document.write("</select>");
}
function ktngaythang(a,b)
{
	document.write("<select>");
	for(i=a;i<=b;i++)
    {
	document.write("<option value='"+i+"'>"+i+"</option>");
	}
document.write("</select>");
}