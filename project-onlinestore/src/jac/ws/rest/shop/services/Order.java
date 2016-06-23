package jac.ws.rest.shop.services;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name = "order")
@XmlAccessorType(XmlAccessType.FIELD)
public class Order
{
	

	public String getDate() {
		return date;
	}

	public void setDate(String date) {
		this.date = date;
	}

	public String getOrderDesc() {
		return orderDesc;
	}

	public void setOrderDesc(String orderDesc) {
		this.orderDesc = orderDesc;
	}

	public Order()
	{
		
	}

    private int orderID;
	
	private String productName;
	
	public Order(int orderID, String productName, String productID, String date, long customerID, String orderDesc) {
		super();
		this.orderID = orderID;
		this.productName = productName;
		this.productID = productID;
		this.date = date;
		this.customerID = customerID;
		this.orderDesc = orderDesc;
	}

	private String productID;
	
	private String date;
	
	private long customerID;
	
	private String orderDesc;
	
	public long getCustomerID() {
		return customerID;
	}

	public void setCustomerID(int customerID) {
		this.customerID = customerID;
	}


	

	public int getOrderID() {
		return orderID;
	}

	public void setOrderID(int orderID) {
		this.orderID = orderID;
	}

	public String getProductName() {
		return productName;
	}

	
	public void setProductName(String productName) {
		this.productName = productName;
	}

	public String getProductID() {
		return productID;
	}

	public void setProductID(String productID) {
		this.productID = productID;
	}
	
}
