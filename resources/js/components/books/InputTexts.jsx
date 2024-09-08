import React from "react";

export default function InputTexts({setFocus}) {
    return (
        <div className="flex flex-col items-start w-full">
            <input
                type="email"
                placeholder="enter your email"
                className="outline-none text-sm rounded-lg p-2 w-full md:text-base focus:drop-shadow-[0_4px_6px_rgba(255,255,255,0.5)] transition duration-500"
                onFocus={() => setFocus(true)}
                onBlur={() => setFocus(false)}
            />
            <br/>
            <div className="mt-4 flex w-full gap-4">
                <button type="button"
                        className="flex-1 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Save Book
                </button>
                <button type="button"
                        className="flex-1 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel
                </button>
            </div>
        </div>
    )
}
