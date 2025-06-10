import { useState } from 'react';

const SavingsCalculatorPage = () => {
  const [hourlyRate, setHourlyRate] = useState(85);
  const [hoursPerWeek, setHoursPerWeek] = useState(40);
  const [currentCut, setCurrentCut] = useState(25);

  const annualHours = hoursPerWeek * 52;
  const grossAnnualBilling = hourlyRate * annualHours;
  const traditionalCut = (grossAnnualBilling * currentCut) / 100;
  const traditionalNetPay = grossAnnualBilling - traditionalCut;
  
  const h1bConnectFees = 3500 + (500 * 12); // Setup + 12 months
  const h1bConnectNetPay = grossAnnualBilling - h1bConnectFees;
  const annualSavings = h1bConnectNetPay - traditionalNetPay;

  return (
    <div className="min-h-screen bg-gray-50 py-12">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-8">
          <h1 className="text-3xl font-bold text-gray-900 mb-4">H1B Savings Calculator</h1>
          <p className="text-xl text-gray-600">See how much you can save with our transparent pricing model</p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
          {/* Input Section */}
          <div className="bg-white rounded-lg shadow p-6">
            <h2 className="text-xl font-semibold mb-6">Your Details</h2>
            
            <div className="space-y-6">
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Hourly Rate ($)
                </label>
                <input
                  type="number"
                  value={hourlyRate}
                  onChange={(e) => setHourlyRate(Number(e.target.value))}
                  className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
              </div>
              
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Hours per Week
                </label>
                <input
                  type="number"
                  value={hoursPerWeek}
                  onChange={(e) => setHoursPerWeek(Number(e.target.value))}
                  className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
              </div>
              
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Current Employer Cut (%)
                </label>
                <input
                  type="number"
                  value={currentCut}
                  onChange={(e) => setCurrentCut(Number(e.target.value))}
                  className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
              </div>
            </div>
          </div>

          {/* Results Section */}
          <div className="bg-white rounded-lg shadow p-6">
            <h2 className="text-xl font-semibold mb-6">Comparison Results</h2>
            
            <div className="space-y-4">
              <div className="flex justify-between">
                <span className="text-gray-600">Annual Hours:</span>
                <span className="font-semibold">{annualHours.toLocaleString()}</span>
              </div>
              
              <div className="flex justify-between">
                <span className="text-gray-600">Gross Annual Billing:</span>
                <span className="font-semibold">${grossAnnualBilling.toLocaleString()}</span>
              </div>
              
              <div className="border-t pt-4">
                <h3 className="font-semibold mb-3">Traditional Model</h3>
                <div className="space-y-2 text-sm">
                  <div className="flex justify-between">
                    <span>Employer Cut ({currentCut}%):</span>
                    <span className="text-red-600">-${traditionalCut.toLocaleString()}</span>
                  </div>
                  <div className="flex justify-between font-medium">
                    <span>Your Net Pay:</span>
                    <span>${traditionalNetPay.toLocaleString()}</span>
                  </div>
                </div>
              </div>
              
              <div className="border-t pt-4">
                <h3 className="font-semibold mb-3">H1BConnect Model</h3>
                <div className="space-y-2 text-sm">
                  <div className="flex justify-between">
                    <span>Setup + Monthly Fees:</span>
                    <span className="text-red-600">-${h1bConnectFees.toLocaleString()}</span>
                  </div>
                  <div className="flex justify-between font-medium">
                    <span>Your Net Pay:</span>
                    <span className="text-green-600">${h1bConnectNetPay.toLocaleString()}</span>
                  </div>
                </div>
              </div>
              
              <div className="border-t pt-4 bg-green-50 p-4 rounded-lg">
                <div className="flex justify-between text-lg font-bold">
                  <span>Annual Savings:</span>
                  <span className="text-green-600">
                    ${annualSavings > 0 ? '+' : ''}${annualSavings.toLocaleString()}
                  </span>
                </div>
                {annualSavings > 0 && (
                  <p className="text-sm text-green-700 mt-2">
                    You save ${Math.round(annualSavings/12).toLocaleString()} per month!
                  </p>
                )}
              </div>
            </div>
          </div>
        </div>

        <div className="text-center mt-8">
          <button className="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
            Get Started - Save ${annualSavings > 0 ? annualSavings.toLocaleString() : '0'} This Year
          </button>
        </div>
      </div>
    </div>
  );
};

export default SavingsCalculatorPage; 