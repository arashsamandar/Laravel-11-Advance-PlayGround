import React from "react";
import InputTexts from "./InputTexts";

export default function TailWindExample() {
    return (
        <div className="block p-6 bg-gray-800 border border-gray-700 rounded-lg shadow w-1/5">
            <div className="bg-gray-800 p-4">
                <div className="font-bold text-white text-center text-xl">
                    Enter Book Names
                </div>
            </div>
            <div className="text-center p-10">
                <br/>
                <InputTexts />
            </div>
        </div>
    )
}
