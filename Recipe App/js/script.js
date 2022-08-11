

// DOM hooks
const addIngredient = document.querySelector("#addIngredient")
const addDirection = document.querySelector("#addDirection")
const ingredients = document.querySelector("#ingredients")
const directions = document.querySelector("#directions")
const selectedCategories = document.querySelector("#selected_categories")
const addCategoryBtn = document.querySelector("#addCategoryBtn")
const recipeForm = document.querySelector("#recipeForm")
const options = document.querySelectorAll("option")
const clearCategoriesBtn = document.querySelector("#clearCategories")


// counters for ingredients and directions
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
    // input1.focus()
    input1.select()
})

addDirection.addEventListener("click", () => {
    stepCounter += 1
    let div2 = document.createElement("div")
    div2.setAttribute("class", "input-group mb-3")

    let span2 = document.createElement("span")
    span2.setAttribute("class", "input-group-text")

    let textarea1 = document.createElement("textarea")
    textarea1.setAttribute("class", "form-control")
    textarea1.setAttribute("name", "step_" + stepCounter)
    textarea1.setAttribute("id", "step_" + stepCounter)

    span2.innerText = "Step " + stepCounter
    div2.appendChild(span2)
    div2.appendChild(textarea1)
    directions.appendChild(div2)
    textarea1.select()
})

function addCategory(tempCatName) {
    // hook for Category HTML select input
    let categorySelect = document.querySelector("#categorySelect")
    // ignore if the default category option is not changed
    // if (categorySelect.value != "Choose...") {
    // create span element to display selected category
    let newCategory = document.createElement("span")
    // set the class attribute for CSS styling
    newCategory.setAttribute("class", "selected_category")
    // set the inner text of the span to the category name
    let categoryName
    if (tempCatName != null) {
        categoryName = tempCatName
    }
    if (!categoryName) {
        categoryName = categorySelect.options[categorySelect.selectedIndex].text
    }
    newCategory.innerText = categoryName
    // add the selected category span to the display area
    selectedCategories.appendChild(newCategory)

    //hide selected category
    let hideCategory = document.querySelector("#ctg_" + categoryName)
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
    // }
}

addCategoryBtn.addEventListener("click", () => {
    addCategory()
})

clearCategoriesBtn.addEventListener("click", () => {
    // hide Clear Categories button when categories are cleared
    clearCategoriesBtn.hidden = true
    // remove all category spans
    selectedCategories.innerHTML = ""
    // remove hidden attribute for all input:select options
    options.forEach(element => {
        element.hidden = false
    })
    // remove the hidden inputs for selected categories
    const hiddenInputs = document.querySelectorAll(".hiddenInput")
    hiddenInputs.forEach(element => {
        element.remove()
    })
})