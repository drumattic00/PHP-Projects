const addIngredient = document.querySelector("#addIngredient")
const addDirection = document.querySelector("#addDirection")
const ingredients = document.querySelector("#ingredients")
const directions = document.querySelector("#directions")
const selectedCategories = document.querySelector("#selected_categories")
const addCategory = document.querySelector("#addCategoryBtn")
const recipeForm = document.querySelector("#recipeForm")
const options = document.querySelectorAll("option")
const clearCategoriesBtn = document.querySelector("#clearCategories")



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
    input2.setAttribute("name", "step_" + stepCounter)



    span2.innerText = "Step " + stepCounter
    div2.appendChild(span2)
    div2.appendChild(input2)
    directions.appendChild(div2)
})

addCategory.addEventListener("click", () => {
    // hook for Category HTML select input
    let categorySelect = document.querySelector("#categorySelect")
    // ignore if the default category option is not changed
    if (categorySelect.value != "Choose...") {
        // create span element to display selected category
        let newCategory = document.createElement("span")
        // set the class attribute for CSS styling
        newCategory.setAttribute("class", "selected_category")
        // set the inner text of the span to the category name
        let categoryName = categorySelect.options[categorySelect.selectedIndex].text
        newCategory.innerText = categoryName
        // add the selected category span to the display area
        selectedCategories.appendChild(newCategory)

        //hide selected category
        let hideCategory = document.querySelector("#ctg_" + categorySelect.value)
        hideCategory.hidden = true

        // creation of hidden input values for database purposes
        let hiddenInput = document.createElement("input")
        hiddenInput.setAttribute("class", "hiddenInput")
        hiddenInput.setAttribute("type", "hidden")
        hiddenInput.setAttribute("value", categorySelect.value)
        hiddenInput.setAttribute("name", "category_" + categorySelect.value)
        recipeForm.appendChild(hiddenInput)

        //reset the Select Option to the default
        categorySelect.selectedIndex = 0
        // show Clear Categories button
        clearCategoriesBtn.hidden = false
    }

})

clearCategoriesBtn.addEventListener("click", () => {
    clearCategoriesBtn.hidden = true
    selectedCategories.innerHTML = ""
    options.forEach(element => {
        element.hidden = false
    })
    const hiddenInputs = document.querySelectorAll(".hiddenInput")
    hiddenInputs.forEach(element => {
        element.remove()
    })
})