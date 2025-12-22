function factorial(n) {


  FFFFFF
  if (n < 0 || !Number.isInteger(n)) return 'Err';
  return n === 0 ? 1 : n * factorial(n - 1);
}

class calculate {
  constructor(first_num, second_one) {
    this.first_num = first_num;
    this.second_one = second_one;
    this.clear();
  }

  numbermagic(num) {
    if (num === '.' && this.second.includes('.')) return;
    this.second = this.second + num.toString();
  }

  clear() {
    this.second = '';
    this.first = '';
    this.symb = '';
  }

  delete() {
    this.second = this.second.toString().slice(0, -1);
  }

  operator(symbol) {
    if (this.first !== '' && this.second !== '') {
      this.symb = symbol;
      this.calculation();
      return;
    }
    if (this.first !== '') {
      this.symb = symbol;
      return;
    }
    this.first = this.second;
    this.second = '';
    this.symb = symbol;
  }

  equal() {
    this.second = this.first.toString();
    this.first = '';
    this.symb = '';
  }

  calculation() {
    let a = parseFloat(this.first);
    let b = parseFloat(this.second);

    switch (this.symb) {
      case '+':
        this.first = a + b;
        break;
      case '-':
        this.first = a - b;
        break;
      case '*':
        this.first = a * b;
        break;
      case '/':
        this.first = b === 0 ? 'Err' : a / b;
        break;
      case 'sq':
        this.first = a * a;
        break;
      case 'sqrt':
        this.first = a < 0 ? 'Err' : Math.sqrt(a);
        break;
      case '!':
        this.first = factorial(a);
        break;
      case 'ND':
        this.first = -a;
        break;
      default:
        return;
    }

    this.display();
    this.second = '';
  }

  display() {
    this.second_one.innerText = this.second;
    this.first_num.innerText = this.first.toString() + this.symb.toString();
  }
}

const numbers = document.querySelectorAll('[data-number]');
const operators = document.querySelectorAll('[data-operand]');
const first_num = document.querySelector('[data-first]');
const second_one = document.querySelector('[data-second]');
const ac = document.querySelector('[data-a]');
const deleteButton = document.querySelector('[data-d]');
const equal = document.querySelector('[data-e]');
const calculator = new calculate(first_num, second_one);

numbers.forEach(button => {
  button.addEventListener('click', () => {
    calculator.numbermagic(button.innerText);
    calculator.display();
  });
});

operators.forEach(button => {
  button.addEventListener('click', () => {
    calculator.operator(button.innerText);
    calculator.display();
  });
});

deleteButton.addEventListener('click', () => {
  calculator.delete();
  calculator.display();
});

equal.addEventListener('click', () => {
  calculator.calculation();
  calculator.equal();
  calculator.display();
});

ac.addEventListener('click', () => {
  calculator.clear();
  calculator.display();
});
