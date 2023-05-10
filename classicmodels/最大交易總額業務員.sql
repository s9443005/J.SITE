
drop view if exists transaction4sales;
create view transaction4sales as 
select sum(quantityOrdered*priceEach) as salePerEmployee, 
       orderdetails.orderNumber, orders.customerNumber, 
       customers.salesRepEmployeeNumber,
       employees.lastname, employees.firstname 
from orderdetails, orders, customers, employees 
where orderdetails.orderNumber = orders.orderNumber and 
      orders.customerNumber    = customers.customerNumber and 
      employees.employeeNumber = customers.salesRepEmployeeNumber 
group by salesRepEmployeeNumber
;

select salesRepemployeeNumber, firstname, lastname, max(salePerEmployee) from transaction4sales;