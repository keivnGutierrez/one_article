var mesage=document.getElementById('mesaje');
class Send{
    constructor(controller,form,method,camp=null){
        this.controller=controller;
        this.method=method;
        this.form=new FormData(form);
        if(camp!=null){
            this.camp=camp;
            this.url=`/one_article/publico/${this.controller}/${this.method}/${this.camp}/`;
        }else{
            this.url=`/one_article/publico/${this.controller}/${this.method}/`;
        }
        console.log(this.url);
        this.send();   
    }
    send(){       
        fetch(`${this.url}`,
        {
            method:'POST',
            body:this.form
        }
        ).then(
            data=>data.json()
        ).then(data=>{
            // console.log(data);
            mesage.innerHTML=data;
            setTimeout(function () {
                mesage.innerHTML='';
            },2500); 
        })
    }
}