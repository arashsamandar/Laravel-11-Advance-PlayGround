import React from 'react';
import {createRoot} from 'react-dom';
import Books from "./components/Books";

const root = createRoot(document.getElementById('books'));
root.render(<Books />);
