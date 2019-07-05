function cari() {
var kata = document.formcari.keyword.value;  //memberitahu Javascript bahwa kita akan membuat fungsi yaitu funsi google
var hasil = "http://www.google.com/search?q=" + kata ;//hasil dibuka dan lansung ke tab dan dicari di google
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')//ukuran tampilan
};
function jam() {  //memberitahu Javascript bahwa kita akan membuat fungsi yaitu fungsi jams
    var time = new Date(), //
    hours = time.getHours(),
    minutes = time.getMinutes(),                            
    seconds = time.getSeconds();
    document.querySelectorAll('.jam')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
      
    function harold(standIn) {
        if (standIn < 10) {
          	standIn = '0' + standIn
        }
        return standIn;
        }
    }setInterval(jam, 1000);//lama jam nya ditampilin di web
    

  