import React, { useState } from 'react';

const ExampleCard = () => {
    const [formData, setFormData] = useState({
        field1: '',
        field2: '',
        field3: ''
    });

    const handleInputChange = (e) => {
        const { name, value } = e.target;
        setFormData(prevState => ({
            ...prevState,
            [name]: value
        }));
    };

    const handleSave = () => {
        console.log('Saving:', formData);
        // Add your save logic here
    };

    const handleCancel = () => {
        console.log('Cancelled');
        setFormData({
            field1: '',
            field2: '',
            field3: ''
        });
    };

    return (
        <div className="w-full max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div className="px-6 py-4 bg-gray-100 border-b border-gray-200">
                <h2 className="text-xl font-semibold text-gray-800">Form Card</h2>
            </div>
            <div className="p-6">
                <form className="space-y-4">
                    <input
                        type="text"
                        name="field1"
                        value={formData.field1}
                        onChange={handleInputChange}
                        placeholder="Field 1"
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                    <input
                        type="text"
                        name="field2"
                        value={formData.field2}
                        onChange={handleInputChange}
                        placeholder="Field 2"
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                    <input
                        type="text"
                        name="field3"
                        value={formData.field3}
                        onChange={handleInputChange}
                        placeholder="Field 3"
                        className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </form>
            </div>
            <div className="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-end space-x-2">
                <button
                    onClick={handleCancel}
                    className="px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500"
                >
                    Cancel
                </button>
                <button
                    onClick={handleSave}
                    className="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                    Save
                </button>
            </div>
        </div>
    );
};

export default ExampleCard;
