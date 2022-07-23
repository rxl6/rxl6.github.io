var data = JSON.parse(au);
data.forEach(function(element){
document.getElementById("isikomen").innerHTML +=`
      <div class="list">
       <div class="content">
        <h2 class="rank">
         <small>on → </small>30 juni 2022 | 11:59 WIB
        </h2>
        <h4>` + element.nama + `</h4>
        <p>` + element.isi + `</p>
       </div>
      </div>
      
`;})