function GetInfo() {

    var newName = document.getElementById("cityInput");
    console.log(newName)
    switch(newName.value) 
    {
        case "New york":
        case "New York":
        case "new york":
            document.getElementById("body").style.backgroundImage = "url('https://images.unsplash.com/photo-1534270804882-6b5048b1c1fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bmV3JTIweW9ya3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60')";
            break;
        case "Udupi":
        case "udupi":
            document.getElementById("body").style.backgroundImage = "url('https://images.unsplash.com/photo-1590610984628-a73b960c6e8b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80')";
            break;
        case "karkala":
        case "Karkala":
            document.getElementById("body").style.backgroundImage = "url('https://images.unsplash.com/photo-1604765807403-56fdb8213583?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8a2Fya2FsYSUyMGthcm5hdGFrYXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60')";
            break;
        case "japan":
        case "Japan":
            document.getElementById("body").style.backgroundImage = "url('https://images.unsplash.com/photo-1526481280693-3bfa7568e0f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8amFwYW4lMjB0b3VyaXN0JTIwcGFsY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60')";
            break;
        case "Delhi":
        case "delhi":
            document.getElementById("body").style.backgroundImage = "url('https://images.unsplash.com/photo-1555952238-7d76782b45f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njh8fGRlbGhpJTIwdG91cmlzdCUyMHBhbGNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60')";
            break;
        case "kerala":
        case "Kerala":
            document.getElementById("body").style.backgroundImage = "url('https://images.unsplash.com/photo-1593693411515-c20261bcad6e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8a2VyYWxhJTIwdG91cmlzbXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60')";
            break;
        case "london":
        case "London":
            document.getElementById("body").style.backgroundImage = "url('https://images.unsplash.com/photo-1476958526483-36efcaa80b1b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bG9uZG9uJTIwdG91cmlzdCUyMHBhbGNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60')";
            break;
        default:
            document.getElementById("body").style.backgroundImage = "url('https://images.unsplash.com/photo-1622899505135-694e8ccffce8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG5hdHVyZSUyMGJhY2tncm91bmR8ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60')";

    }

fetch('https://api.openweathermap.org/data/2.5/forecast?q='+newName.value+'&appid=789d9b64e1edc1c1a4d4e84f0b7f9d4b')
.then(response => response.json())
.then(data => {

    //Getting the min and max values for each day
    for(i = 0; i<7; i++){
        document.getElementById("day" + (i+1) + "Min").innerHTML = "Min: " + Number(data.list[i].main.temp_min - 273.15).toFixed(1)+ "°C";
        //Number(1.3450001).toFixed(2); // 1.35
    }

    for(i = 0; i<7; i++){
        document.getElementById("day" + (i+1) + "Max").innerHTML = "Max: " + Number(data.list[i].main.temp_max - 273.15).toFixed(1) + "°C";
    }
    //------------------------------------------------------------

    //Getting Weather Icons
     for(i = 0; i<7; i++){
        document.getElementById("img" + (i+1)).src = "http://openweathermap.org/img/wn/"+
        data.list[i].weather[0].icon
        +".png";
    }
    //------------------------------------------------------------
    console.log(data)


})

.catch(err => alert("Something Went Wrong: Try Checking Your Internet Connection..."))
}

function DefaultScreen(){
    document.getElementById("cityInput").defaultValue = "Udupi";
    GetInfo();
}


//Getting and displaying the text for the upcoming seven days of the week
var d = new Date();
var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday",];

//Function to get the correct integer for the index of the days array
function CheckDay(day){
    if(day + d.getDay() > 6){
        return day + d.getDay() - 7;
    }
    else{
        return day + d.getDay();
    }
}

    for(i = 0; i<7; i++){
        document.getElementById("day" + (i+1)).innerHTML = weekday[CheckDay(i)];
    }

