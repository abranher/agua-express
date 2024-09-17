import Alpine from "alpinejs";
import StockProducts from "./alpine/inventory/stocks-products/StockProducts";

window.Alpine = Alpine;

Alpine.data("stockProducts", StockProducts);

Alpine.start();
