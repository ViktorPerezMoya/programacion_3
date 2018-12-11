/*1) Listar para el cliente nro. 1 todos los pedidos realizados, indicando: el id, descripción, fecha de
compra y fecha de entrega del pedido y los códigos de productos incluidos en el pedido*/

SELECT p.id_pedido, p.descripcion, p.fecha_compra, p.fecha_entrega, dp.codigo_producto AS codigo FROM clientes c
INNER JOIN pedidos p ON p.id_cliente = c.id_cliente
INNER JOIN detallepedido dp ON dp.id_pedido = p.id_pedido
WHERE c.id_cliente = 1;

/* 2) Listar todos los pedidos de todos los clientes, indicando id cliente, nombre y apellido, id pedido y
descripción de pedido.*/

SELECT c.id_cliente, c.nombre, c.apellido, p.id_pedido, p.descripcion FROM clientes c
INNER JOIN pedidos p ON p.id_cliente = c.id_cliente;

/* 3) Listar el detalle de los pedidos de los clientes. Incluir los siguientes datos en el listado:
Del cliente: id, nombre, apellido.
Del pedido: id, descripción
Detalle del pedido: código de producto y cantidad.*/

SELECT c.id_cliente, c.nombre, c.apellido, p.id_pedido, p.descripcion, dp.codigo_producto, dp.cantidad FROM clientes c
INNER JOIN pedidos p ON p.id_cliente = c.id_cliente
INNER JOIN detallepedido dp ON dp.id_pedido = p.id_pedido;

/*4) Listar los clientes que aún no hayan realizado pedidos utilizando el join apropiado.
*/

SELECT c.id_cliente, c.nombre, c.apellido FROM clientes c
LEFT JOIN pedidos p ON p.id_cliente = c.id_cliente
WHERE p.id_pedido IS NULL;

/*5) Clientes que no hayan hecho pedidos (ídem 4 pero mediante una subconsulta)*/
SELECT c.id_cliente, c.nombre, c.apellido FROM clientes c
WHERE c.id_cliente NOT IN (SELECT DISTINCT(p.id_cliente) FROM pedidos p);

/*6) Listar el/los pedidos con mayor descuento realizado (subconsulta)
*/
SELECT p.* FROM pedidos p WHERE p.descuento = (SELECT MAX(p2.descuento) FROM pedidos p2);

/*7) Listar el/los pedidos con menor descuento realizado (subconsulta)*/
SELECT p.* FROM pedidos p WHERE p.descuento = (SELECT MIN(p2.descuento) FROM pedidos p2);

/*8) Listar los clientes que hayan realizado pedidos (subconsulta)
*/
SELECT c.* FROM clientes c
WHERE c.id_cliente IN (SELECT DISTINCT(p.id_cliente) FROM pedidos p);

/*9) Listar el/los codigos de producto de mayor valor*/
SELECT pr.* FROM productos pr
WHERE pr.precio = (SELECT MAX(pr2.precio) FROM productos pr2);