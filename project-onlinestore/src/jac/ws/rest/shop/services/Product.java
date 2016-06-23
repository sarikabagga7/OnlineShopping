package jac.ws.rest.shop.services;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name = "Product")
public class Product {
	private String id;
	private String description;
	private double price;
	
	//marshalled classes need the default constructor.
		public Product()
		{
			super();
		}

	public double getPrice() {
		return price;
	}

	public Product(String id, String description, double price) {
		super();
		this.id = id;
		this.description = description;
		this.price = price;
	}

	public void setPrice(double price) {
		this.price = price;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String d) {
		this.description = d;
	}

	@Override
	public String toString() {
		return "Product [id=" + id + ", description=" + description + ", price=" + price + "]";
	}

	
}