

function cool(){
     fetch('php/api.php')
    .then(res => res.text())
    .then(data =>{
     document.getElementById('out').innerHTML = data;
    })
    }
cool();
    

function pickup(data){
  
    var id = data
    $.post("php/pickup.php",{id: id}, (data)=>{
    
     document.getElementById('outside').innerHTML = data;
    //  alert(data);
    
    })


}