import "./bootstrap";
import {
    Alpine,
    Livewire,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import picker from "./picker.js";

Alpine.plugin(picker);

Livewire.start();
