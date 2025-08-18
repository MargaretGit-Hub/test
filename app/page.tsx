'use client';

import { useState } from 'react';

export default function Calculator() {
  const [display, setDisplay] = useState('0');
  const [previousValue, setPreviousValue] = useState<number | null>(null);
  const [operation, setOperation] = useState<string | null>(null);
  const [waitingForInput, setWaitingForInput] = useState(false);

  const inputNumber = (num: string) => {
    if (waitingForInput) {
      setDisplay(num);
      setWaitingForInput(false);
    } else {
      setDisplay(display === '0' ? num : display + num);
    }
  };

  const inputOperation = (nextOperation: string) => {
    const inputValue = parseFloat(display);

    if (previousValue === null) {
      setPreviousValue(inputValue);
    } else if (operation && !waitingForInput) {
      const currentValue = previousValue || 0;
      const newValue = calculate(currentValue, inputValue, operation);

      setDisplay(String(newValue));
      setPreviousValue(newValue);
    }

    setWaitingForInput(true);
    setOperation(nextOperation);
  };

  const calculate = (firstValue: number, secondValue: number, operation: string): number => {
    switch (operation) {
      case '+':
        return firstValue + secondValue;
      case '-':
        return firstValue - secondValue;
      case '*':
        return firstValue * secondValue;
      case '/':
        return firstValue / secondValue;
      default:
        return secondValue;
    }
  };

  const performCalculation = () => {
    const inputValue = parseFloat(display);

    if (previousValue !== null && operation) {
      const newValue = calculate(previousValue, inputValue, operation);
      setDisplay(String(newValue));
      setPreviousValue(null);
      setOperation(null);
      setWaitingForInput(true);
    }
  };

  const clear = () => {
    setDisplay('0');
    setPreviousValue(null);
    setOperation(null);
    setWaitingForInput(false);
  };

  const inputDecimal = () => {
    if (waitingForInput) {
      setDisplay('0.');
      setWaitingForInput(false);
    } else if (display.indexOf('.') === -1) {
      setDisplay(display + '.');
    }
  };

  return (
    <div className="min-h-screen bg-gray-100 flex items-center justify-center p-4">
      <div className="bg-white rounded-lg shadow-2xl p-6 w-full max-w-sm">
        <div className="mb-4">
          <h1 className="text-2xl font-bold text-gray-800 text-center mb-4">
            Calculator
          </h1>
          
          {/* Display */}
          <div className="bg-gray-900 text-white p-4 rounded-lg mb-4">
            <div className="text-right text-2xl font-mono break-all">
              {display}
            </div>
          </div>
        </div>

        {/* Buttons */}
        <div className="grid grid-cols-4 gap-2">
          {/* Row 1 */}
          <button
            onClick={clear}
            className="col-span-2 bg-red-500 hover:bg-red-600 text-white font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            Clear
          </button>
          <button
            onClick={() => inputOperation('/')}
            className="bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            ÷
          </button>
          <button
            onClick={() => inputOperation('*')}
            className="bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            ×
          </button>

          {/* Row 2 */}
          <button
            onClick={() => inputNumber('7')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            7
          </button>
          <button
            onClick={() => inputNumber('8')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            8
          </button>
          <button
            onClick={() => inputNumber('9')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            9
          </button>
          <button
            onClick={() => inputOperation('-')}
            className="bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            -
          </button>

          {/* Row 3 */}
          <button
            onClick={() => inputNumber('4')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            4
          </button>
          <button
            onClick={() => inputNumber('5')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            5
          </button>
          <button
            onClick={() => inputNumber('6')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            6
          </button>
          <button
            onClick={() => inputOperation('+')}
            className="bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            +
          </button>

          {/* Row 4 */}
          <button
            onClick={() => inputNumber('1')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            1
          </button>
          <button
            onClick={() => inputNumber('2')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            2
          </button>
          <button
            onClick={() => inputNumber('3')}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            3
          </button>
          <button
            onClick={performCalculation}
            className="row-span-2 bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            =
          </button>

          {/* Row 5 */}
          <button
            onClick={() => inputNumber('0')}
            className="col-span-2 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            0
          </button>
          <button
            onClick={inputDecimal}
            className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-4 px-4 rounded-lg transition-colors duration-200"
          >
            .
          </button>
        </div>
      </div>
    </div>
  );
}
