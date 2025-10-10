function ProjectList( category,id){
    const Projects = {
        "web development":{
            "Calculator":"https://bipulbimali.com.np/projects/web/Calculator/calculator.php",
            "Mail":"https://bipulbimali.com.np/misc/comingsoon.php",
	    "WordPress Site":"https://wordpress.bipulbimali.com.np/"
            },
        "Software development":{
            "Can't show yet":"ONE"
            }
        }
        const parent = document.getElementById('project_list');
        const items = Object.keys(Projects[category]);
        var list = Projects[category];
        var container = document.getElementsByClassName('temporary');
        while(container.length > 0 ){
            container[0].parentNode.removeChild(container[0]);
        }
        items.forEach(item => {
            var element = document.createElement('li');            
            var link = document.createElement('a');
            element.className = "temporary";
            link.className = "dropdown-item";
            link.href = list[item];
            element.appendChild(link);
            link.textContent = item;
            parent.appendChild(element);
        });


}
const project_cat =  document.querySelectorAll('[project-list]');/*NUMBERS are a string */
// const operators =  document.querySelectorAll('[data-operand]');//this loooks for operator
// const first_num =  document.querySelector('[data-first]');//this does first disp segment
// const second_one =  document.querySelector('[data-second]');//this does second disp
// const ac = document.querySelector('[data-a]');
// const deleteButton= document.querySelector('[data-d]');
// const equal = document.querySelector('[data-e]');
project_cat.forEach(a =>{
  a.addEventListener('click', () => {
   alert("clicker")
    })
 })
