////////////////////////////////////////////////////////////////////////////////// BUDGET CONTROLLER
//////////////////////////////////////////////////////////////////////////////////

var budgetController = (function() {
  // Konstruktor obiektu
  var Expense = function(id, description, value) {
    this.id = id;
    this.description = description;
    this.value = value;
  };

  // Konstruktor obiektu
  var Income = function(id, description, value) {
    this.id = id;
    this.description = description;
    this.value = value;
  };

  var calculateTotal = function(type) {
    var sum = 0;
    data.allItems[type].forEach(function(cur) {
      sum = sum + cus.value;
    });
  };

  var allEcpenses = [];
  var allIncomes = [];
  var totalExpenses = 0;

  var data = {
    allItems: {
      exp: [],
      inc: []
    },
    totals: {
      exp: 0,
      inc: 0
    }
  };

  // All public method here
  return {
    addItem: function(type, des, val) {
      var newItem, ID;
      // [1 2 3 4 5], next ID = 6
      // jak zaczniemy usuwać to będa dziury
      // [1 2 4 13 16], next ID = 17
      // Mechanizm wyznaczający ID = ostatni element tablicy obiektów + 1
      if (data.allItems[type].length > 0) {
        ID = data.allItems[type][data.allItems[type].length - 1].id + 1;
      } else {
        ID = 0;
      }

      // Create new Item
      if (type === "exp") {
        newItem = new Expense(ID, des, val);
      } else if (type === "inc") {
        newItem = new Income(ID, des, val);
      }
      // push in into data object
      data.allItems[type].push(newItem);
      return newItem;
    },

    calculateBudget: function() {
      // calculate total income in expenses
      // calculate the budget
      // calculate the percentage of icome that we spent
    },

    testing: function() {
      console.log(newItem);
    }
  };
})();

//////////////////////////////////////////////////////////////////////////////////  BUDGET CONTROLLER - end

//////////////////////////////////////////////////////////////////////////////////  UI CONTROLLER
//////////////////////////////////////////////////////////////////////////////////
var UIController = (function() {
  var DOMstrings = {
    inputType: ".add__type",
    inputDescription: ".add__description",
    inputValue: ".add__value",
    inputBtn: ".add__btn",
    incomeContainer: ".income__list",
    expensesContainer: ".expenses__list"
  };

  // właściwości w "return", żeby były publiczne
  return {
    // Metoda pobierająca i udostępniająca wprowadzone elementy input
    getInput: function() {
      // właściwości w "return", żeby były publiczne
      return {
        type: document.querySelector(DOMstrings.inputType).value, // inc or exp
        description: document.querySelector(DOMstrings.inputDescription).value,
        value: parseFloat(document.querySelector(DOMstrings.inputValue).value)
      };
    },

    // dodawanie elementu income / expense do DOM
    addListItem: function(obj, type) {
      var html, newHtml;

      // Tworzenie HTML
      if (type === "inc") {
        element = DOMstrings.incomeContainer;
        html =
          '<div class="item clearfix" id="income-%id%"><div class="item__description">%description%</div><div class="right clearfix"><div class="item__value">%value%</div><div class="item__delete"><button class="item__delete--btn"><i class="ion-ios-close-outline"></i></button></div></div></div>';
      } else if (type === "exp") {
        element = DOMstrings.expensesContainer;
        html =
          '  <div class="item clearfix" id="expense-%id%"><div class="item__description">%description%</div><div class="right clearfix"><div class="item__value">%value%</div><div class="item__percentage">21%</div><div class="item__delete"><button class="item__delete--btn"><i class="ion-ios-close-outline"></i></button></div> </div></div>';
      }

      //Replace the placeholder text with some actual dodatkowa
      newHtml = html.replace("%id%", obj.id);
      newHtml = newHtml.replace("%description%", obj.description);
      newHtml = newHtml.replace("%value%", obj.value);
      //Insert the HTML into the DOM
      document.querySelector(element).insertAdjacentHTML("beforeend", newHtml);
    },

    clearFields: function() {
      var fields, fieldsArr;

      fields = document.querySelectorAll(
        DOMstrings.inputDescription + "," + DOMstrings.inputValue
      );

      // konwersja obieku/listy na tablice
      fieldsArr = Array.prototype.slice.call(fields);

      // ??????????????????? WTF/
      fieldsArr.forEach(function(current, index, array) {
        current.value = "";
      });

      fieldsArr[0].focus();
    },

    // dodatkowa metoda udostępniająca objekt DOMstrings
    getDOMstrings: function() {
      return DOMstrings;
    }
  };
})();
//////////////////////////////////////////////////////////////////////////////////  UI CONTROLLER - end

//////////////////////////////////////////////////////////////////////////////////  GLOBAL GONTROLLER
//////////////////////////////////////////////////////////////////////////////////

var controller = (function(budgetCtrl, UICtrl) {
  // Event listeners
  var setupEventListeners = function() {
    var DOM = UICtrl.getDOMstrings();
    document.querySelector(DOM.inputBtn).addEventListener("click", ctrAddItem);
    document.addEventListener("keypress", function(event) {
      if (event.keyCode === 13 || event.which === 13) {
        ctrAddItem();
      }
    });
  };

  var updateBudget = function() {
    // 1. Calculate the bugdet
    // 2. Return the budget
    // 3. Display the budget on the UI
  };

  // Add new Item
  var ctrAddItem = function() {
    var input, newItem;

    // 1. Get the field input data
    input = UICtrl.getInput();

    if (input.description !== "" && !isNaN(input.value) && input.value > 0) {
      console.log(
        "Dodaję nową pozycję: " +
          input.description +
          " " +
          input.value +
          " " +
          input.type
      );
      // 2. Add the item to the budget CONTROLLER
      newItem = budgetCtrl.addItem(input.type, input.description, input.value);

      // 3. Add the item to the UI
      UICtrl.addListItem(newItem, input.type);

      // 4. Clear the fields
      UICtrl.clearFields();
      // 5. Calculate the budget
      updateBudget();
      // 6. Display the budget on the UI
    }
  };

  return {
    init: function() {
      console.log("Aplication starters");
      setupEventListeners();
    }
  };
})(budgetController, UIController);

////////////////////////////////////////////////////////////////////////////////// GLOBAL GONTROLLER - end

controller.init();
