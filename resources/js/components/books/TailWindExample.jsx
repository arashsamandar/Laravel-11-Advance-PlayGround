import React from "react";
import InputTexts from "./InputTexts";

export default function TailWindExample() {

    return (
        <div className="w-full max-w-sm border border-gray-700 bg-white rounded-lg shadow">
            <div className="text-center text-gray-500 p-10">
                Hello Arash Salamander<br/><br/>
                <InputTexts />
            </div>
        </div>
    )
}
