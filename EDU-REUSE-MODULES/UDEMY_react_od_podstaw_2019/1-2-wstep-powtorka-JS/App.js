class App extends React.Component {
  state = {
    counter: 0
  };
  render() {
    return (
      <div>
        <h1>Hello world!</h1>
      </div>
    );
  }
}

ReactDOM.render(<App />, document.getElementById("root"));

// stara wersja zapisu funkcji

function myfuncion0(param) {
  console.log("Stara funkcja" + param);
}

myfuncion0("test");

//funkcja strzałkowa

const myfunction2 = param => {
  return console.log("Funkcja strzałkowa tylko dłużssza" + param);
};

myfunction2("test");

// to samo tylko krócej

const myfunction = param => console.log("Funkcja strzałkowa " + param);

myfunction("buteel");

//////////////////////////////////////////////////////////////////
// PODSTAWOWE METODY NA TABLICACH
//////////////////////////////////////////////////////////////////

/////////////////////////// METODA JOIN
const users = ["romek", "tomek", "atomek"];
const joinuser = users.join(" -- ");
console.log(joinuser);
// App.js:45 romek -- tomek -- atomek
console.log(users);
// App.js:46 (3) ["romek", "tomek", "atomek"]

////////////////////////////////////// METODA CONCAT
// zwaraca nową tablicę z połączenia user i nowego elementu
const concatuser = users.concat("nowy user");
console.log(concatuser);
// App.js:50 (4) ["romek", "tomek", "atomek", "nowy user"]
const users2 = ["romek2", "tomek2", "atomek2"];
const dwietablice = users.concat(users2);
console.log(dwietablice);
// App.js:54 (6) ["romek", "tomek", "atomek", "romek2", "tomek2", "atomek2"]

/////////////////////////////////////// METODA SPREAD
// alternatywa do CONCAT
const testspreda = [...users, "Bobek"];
console.log(testspreda);
// Taki sam efekt
// (4) ["romek", "tomek", "atomek", "Bobek"]

//////////////////////// METODY ITERUJĄCE PO TABLICACH
// tworzy nową tablice
const uppercaseletter = users.map(user => user[0].toUpperCase());
// funckja iteruje po pierwszych literach
console.log(uppercaseletter);
(3)[("R", "T", "A")];

// funkcja mnoży liczby w tablicy przez dwa
const items = [2, 4, 6];
const dobuleitems = items.map(item => item * 2);
console.log(dobuleitems);
//  [4, 8, 12]

/////////////////////////////METODA FOREACH
const userAge = [21, 42, 53, 23];
// użycie forEach z "template stringami"
userAge.forEach(age =>
  console.log(`W przyslym roku gosc będzie mial  ${age + 1}`)
);

// W przyslym roku gosc będzie mial  22
// W przyslym roku gosc będzie mial  43
// W przyslym roku gosc będzie mial  54
// W przyslym roku gosc będzie mial  24

// przyklad 2
const userAge2 = [21, 42, 53, 23];
let totalAge = 0;

userAge.forEach(age => (totalAge += age));
console.log(totalAge);
// 139

// przykład 3
// do forEach można przekazać aż trzy parametry
// 1 - element tablicy
// 2 - index elementu
// 3 - cała tablica

const userAge3 = [21, 42, 53, 23];
const section = document.createElement("section");

userAge.forEach((age, index, array) => {
  section.innerHTML +=
    // okragłe nawiasy, żeby interpreter wiedział, że to jedna linia i nie dawał średnika;
    `<h1>Użytkownik ${index + 1}</h1><p>wiek: ${age}</p>`;

  if (index === array.length - 1) {
    document.body.appendChild(section);
  }
});

// Użytkownik 1
// wiek: 21
// Użytkownik 2
// wiek: 42

////////////////////////////////////////////// METODA FILTER
// zwraca tablicę złożoną z tych elementów, przy których iterator zwrócił TRUE
const users3 = ["romek", "tomek", "atomek", "seba"];

const nameWith4Letters = users3.filter(user => user.length === 4);

console.log(nameWith4Letters);
// Array [ "seba" ]

// Przykład 2

const nameWidthK = users3.filter(user => {
  // przechodzimy do innej linni więc dajemy nawiasy klamrowe
  // WAŻNE: musimy dać return bo inaczej funkcja będzie zwracała undefined czyli false
  return (
    // metoda indexOf zwraca index litery albo wyrażenia z parametru jak nie znajdzie da -1
    user.indexOf("k") > -1
  );
});

console.log(nameWidthK);
// Array(3) [ "romek", "tomek", "atomek" ]

//////////////////////////////////////////// METODA FIND INDEX
// Metoda findIndex zwraca index pierwszego elementu który spełnia warunek,
// Jeśli nie znajdzie takiego elementu zwróci -1

const customers = [
  { name: "Adam", age: 67 },
  { name: "Basia", age: 45 },
  { name: "Damian", age: 17 }
];

const isUserAdult = customers.findIndex(customer => customer.age < 18);

console.log(isUserAdult);
// 2

////////////////////////////////////////// METODA FIND
// Metoda działa tak samo jak findIndex tylko zmiast indexu zwraca cały element
// który pierwszy zwróci TRUE

const isUserAdult2 = customers.find(customer => customer.age < 18);
console.log(isUserAdult2);
// Object { name: "Damian", age: 17 }

//////////////////////////////////////////////////////////////////
// OBIEKTY KLASY INSTANCJE DZIEDZICZENIE
//////////////////////////////////////////////////////////////////
// Przykład 1
// deklaracja klasy
class City {}

//tworzenie instancji klasy / czyli nowego obiektu
const Warsaw = new City();
const NewYork = new City();
// powstają dwa różne niepołączone obiekty, będące instancją klasy City

// Przykład 2
class Country {
  constructor(name, capital, population) {
    this.name = name;
    this.capital = capital;
    this.population = population;
  }
}

// Przykład 3
const poland = new Country("Polska", "Warszawa", 38);
// powstaje obiekt na podstatwie klasy Country i konstruktora z trzema parametrami
console.log(poland);
// Object { name: "Polska", capital: "Warszawa", population: 38 }

const emptycountery = new Country();
console.log(emptycountery);
// Object { name: undefined, capital: undefined, population: undefined }

// Przykład 4
class Country2 {
  constructor(name) {
    this.name = name; //właściwość każdej instancji
    this.showName = () => console.log(this.name); // metoda każdej instancji
  }

  // Wszystkie metody w klasie znajduja się w prototypie klasy, do której mają dostęp wszystkie instancje
  // Raz napisana metoda, właściwość nie jest kopiowana do każdego nowego obiektu, ale jest dla niego dostępna

  showCountryName() {
    console.log(`Nazwa kraju to ${this.name}`);
  }
}

const Poland = new Country2("Polska");
console.log(Poland);
Poland.showCountryName();
Poland.showName();
/// NAWET JAK BĘDĄ DWIE TAKIE SAME METODY TO NAJPIERW UŻYJE TEJ ZE SWOJEJ INSTANICJI

// Przykład 5

class Person {
  constructor(name) {
    this.name = name;
  }
  showName() {
    console.log(`Imię osoby  to ${this.name}`);
  }
}

class Student extends Person {
  constructor(name = "", degrees = []) {
    // przekazuje do konstruktora po którym dziedziczy
    super(name);
    this.degrees = degrees;
  }
  showDegrees() {
    const completed = this.degrees.filter(degree => degree > 2);
    console.log(
      `Student ${this.name} ma stopnie: ${this.degrees} i zaliczył z ${
        completed.length
      }`
    );
  }
}
const Adam = new Student("Adam", [3, 2, 5, 3, 2, 4]);
Adam.showDegrees();
// Student Adam ma stopnie: 3,2,5,3,2,4 i zaliczył z 4

//////////////////////////////////////////////////////////////////
// element THIS
//////////////////////////////////////////////////////////////////
const car = {
  brand: "opel",
  age: 2019,
  showAge() {
    console.log(`samochod z ${this.age}`);
  },
  showBrand: () => {
    console.log(`samochód marki ${this.brand}`);
  },
  showThis: () => {
    console.log(this);
  }
};

car.showAge();
// samochod z 2019
// car.showBrand();
// undefined  --- bo funkcja strzałkowa nie tworzy swojego THIS tylko dziedziczy go po rodzicu
// car.showThis();

////////////////////////// Mechanizm this - problem 1
const dog = {
  name: "rocky",
  showName() {
    console.log("Imię psa to " + this.name);
  }
};

dog.showName();
console.log("zmienna");
const dogName = dog.showName();
// dogName();
console.log("Bindowanie");
const dogName2 = dog.showName.bind(dog);
dogName2();

//////////////////////////// Mechanizm his - progrem 2
// Dodajemy do metody wewnątrz obiektu bind(this) przez to this to zawsze cat a nie z innego miesjca

const cat = {
  kids: ["ciapek", "łatek", "kicek"],
  showKidsNames() {
    console.log(`kot ma potomstwo: ${this.kids}`);
    const showKidsNumber = function() {
      console.log(this.kids.length);
    }.bind(this);
    showKidsNumber();
  }
};

cat.showKidsNames();

// rozwiaznaie drugie -- użycie funkcji strzalkowej

const panda = {
  kids: ["ciapek", "łatek", "kicek"],
  showKidsNames() {
    console.log(`panda ma potomstwo: ${this.kids}`);
    const showKidsNumber = () => {
      console.log(this.kids.length);
    };
    showKidsNumber();
  }
};

panda.showKidsNames();
