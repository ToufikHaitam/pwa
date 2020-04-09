function createNode(element) {
    return document.createElement(element); 
}

function append(parent, el) {
    return parent.appendChild(el); 
}

const ul = document.getElementById('people');

fetch("http://127.0.0.1:8000/api/taxes")
    .then(response => response.json())
    .then(data => {
        let people = data;

        alert(people);

        return people.map(function(person) {
            
            optionText = person.taxe; 
            optionValue = person.id; 
  
            $('#taxes').append(new Option(optionText, optionValue)); 

             

        });
    })