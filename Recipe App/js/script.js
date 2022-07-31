const addIngredient = document.querySelector("#addIngredient")
const addDirection = document.querySelector("#addDirection")
const ingredients = document.querySelector("#ingredients")
const directions = document.querySelector("#directions")

let ingCounter = 1
let stepCounter = 1

addIngredient.addEventListener("click", () => {
    ingCounter += 1
    let div1 = document.createElement("div")
    div1.setAttribute("class", "input-group mb-3")

    let span1 = document.createElement("span")
    span1.setAttribute("class", "input-group-text")

    let input1 = document.createElement("input")
    input1.setAttribute("type", "text")
    input1.setAttribute("class", "form-control")
    input1.setAttribute("id", "ing_" + ingCounter)
    input1.setAttribute("name", "ing_" + ingCounter)


    span1.innerText = "Ingredient " + ingCounter
    div1.appendChild(span1)
    div1.appendChild(input1)
    ingredients.appendChild(div1)
})

addDirection.addEventListener("click", () => {
    stepCounter += 1
    let div2 = document.createElement("div")
    div2.setAttribute("class", "input-group mb-3")

    let span2 = document.createElement("span")
    span2.setAttribute("class", "input-group-text")

    let input2 = document.createElement("input")
    input2.setAttribute("type", "text")
    input2.setAttribute("class", "form-control")
    input2.setAttribute("id", "step" + stepCounter)


    span2.innerText = "Step " + stepCounter
    div2.appendChild(span2)
    div2.appendChild(input2)
    directions.appendChild(div2)
})