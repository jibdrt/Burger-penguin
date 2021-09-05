const canvas = document.querySelector(".frame");                        //canvas setup
const ctx = canvas.getContext("2d");
canvas.width = innerWidth;
canvas.height = innerHeight;


window.addEventListener("resize",(e)=>{                                 
  canvas.width = innerWidth;
  canvas.height = innerHeight;
},false)

let vectors = [];

let rand = function (min, max)                                          //functions returns random number between min,max
{
  return min + Math.random() * (max - min);
}

function timestamp()                                                    //used for measure delta time
{
    return window.performance && window.performance.now
    ? window.performance.now()
    : new Date().getTime();
};

const power = 
{
    data:
    {
        delta:0,                                                      //delta time calculation
        current:0,
        last:timestamp(),
        step:1 / 60,
        fps:0,
    },
    before:function()
    {
        this.data.current = timestamp();
        this.data.delta = Math.min(1, (this.data.current - this.data.last) / 1000);
        this.data.fps = 1 / this.data.delta;
    },
    after:function()
    {
        this.data.last = this.data.current;
    },
    fpsCounter:function(ctx,x,y)
    {
       Draw.Text(ctx,"fps:"+Math.round(this.data.fps),"sans-serif",this.x,this.y,30,300,"#6ec22f",1);
    }
};

const distance = function(x1,x2)                                        //simple math, measure distance between vectors
{
  let x = x1.x - x2.x;
  let y = x1.y - x2.y;
  return Math.sqrt(Math.pow(x,2)+Math.pow(y,2));
};

class Vector
{
    constructor(x,y)
    {
        this.x = x || rand(0,innerWidth);
        this.y = y || rand(0,innerHeight);
        this.speedX = rand(-50,50);
        this.speedY = rand(-50,50);
    }
    render()
    {
        ctx.fillRect(this.x,this.y,5,5);
    }
    update()
    {

        if(this.x < 0) this.x = innerWidth;                               //if statements for holding vector inside the canvas
        else if(this.x > innerWidth) this.x = 0;

        if(this.y < 0)this.y = innerHeight;
        else if(this.y > innerHeight) this.y = 0;

        this.x += this.speedX * power.data.delta;
        this.y += this.speedY * power.data.delta;
    }
}


const logic = () =>
{
    for(let i = 0;i < vectors.length;i++)
    {
        for(let o = 1;o < vectors.length;o++)
        {
           if(distance(vectors[i],vectors[o]) < 180)    
           {
               ctx.beginPath();
               ctx.moveTo(vectors[i].x+2.5,vectors[i].y+2.5);
               ctx.lineTo(vectors[o].x+2.5,vectors[o].y+2.5);
               ctx.stroke();
           }
        }
    }
}

const loop = () =>
{
    power.before();                                 
    vectors.forEach(v=>v.update());
    ctx.clearRect(0,0,innerWidth,innerHeight);
    logic();
    vectors.forEach(v=>v.render());
    window.requestAnimationFrame(loop);
    power.after();
}

const main = () =>
{
    for(let i = 0;i< 90;i++)  //increase or decrease (i < num) for more/less vectors 
    {
        vectors.push(new Vector());
    }
    loop();
}
main();
